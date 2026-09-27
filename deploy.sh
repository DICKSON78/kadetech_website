#!/bin/bash
# ---------------------------------------------------------------------------
# KADETECH - git based deploy for cPanel shared hosting
#
# ONE-TIME SETUP (run as the cPanel user, not inside this script):
#   cd /home/kadepljk
#   rm -rf kadetech.co.tz/                     # optional: clear the manual upload
#   git clone https://github.com/DICKSON78/kadetech_website.git kadetech.co.tz
#   cd kadetech.co.tz
#   curl -o deploy.sh https://raw.githubusercontent.com/DICKSON78/kadetech_website/main/deploy.sh
#   bash deploy.sh
#
# EVERY deploy after that is just:
#   cd /home/kadepljk/kadetech.co.tz && git pull && bash deploy.sh
#
# The repo is public, so no token or SSH key is needed on the server.
# ---------------------------------------------------------------------------
set -e

APP_DIR="/home/kadepljk/kadetech.co.tz"
cd "$APP_DIR" || { echo "ERROR: cannot find $APP_DIR"; exit 1; }
[ -f artisan ] || { echo "ERROR: artisan not found - wrong directory"; exit 1; }

PHP_BIN="php"
for candidate in /opt/cpanel/ea-php83/root/usr/bin/php /opt/cpanel/ea-php82/root/usr/bin/php; do
  [ -x "$candidate" ] && PHP_BIN="$candidate" && break
done

echo "=============================================================="
echo " KADETECH deploy"
echo "=============================================================="
echo "PHP        : $($PHP_BIN -r 'echo PHP_VERSION;')"
echo "Commit     : $(git rev-parse --short HEAD 2>/dev/null || echo 'not a git repo')"
echo "Manifest   : $([ -f public/build/manifest.json ] && echo present || echo MISSING)"

# --- First run: build .env by asking for the values we do not have ----------
if [ ! -f .env ]; then
  echo
  echo "No .env found - creating one. Values needed from cPanel."
  echo
  echo "--- MySQL database (cPanel -> MySQL Databases) ---"
  read -r -p "Database name    : " DB_NAME
  read -r -p "Database user    : " DB_USER
  read -r -s -p "Database password: " DB_PASS; echo
  read -r -p "Database host [localhost]: " DB_HOST
  DB_HOST="${DB_HOST:-localhost}"

  echo
  echo "--- Mail ---"
  echo "Leave blank to keep mail disabled for now."
  read -r -p "Gmail address [kadetech.online@gmail.com]: " MAIL_USER
  MAIL_USER="${MAIL_USER:-kadetech.online@gmail.com}"
  read -r -s -p "Gmail app password (blank to skip): " MAIL_PASS; echo

  {
    echo "APP_NAME=KADETECH"
    echo "APP_ENV=production"
    echo "APP_KEY="
    echo "APP_DEBUG=false"
    echo "APP_URL=https://kadetech.co.tz"
    echo "APP_LOCALE=en"
    echo "APP_FALLBACK_LOCALE=en"
    echo "APP_FAKER_LOCALE=en_US"
    echo "APP_MAINTENANCE_DRIVER=file"
    echo "BCRYPT_ROUNDS=12"
    echo "LOG_CHANNEL=stack"
    echo "LOG_STACK=single"
    echo "LOG_DEPRECATION_CHANNEL=null"
    echo "LOG_LEVEL=warning"
    echo "DB_CONNECTION=mysql"
    echo "DB_HOST=$DB_HOST"
    echo "DB_PORT=3306"
    echo "DB_DATABASE=$DB_NAME"
    echo "DB_USERNAME=$DB_USER"
    echo "DB_PASSWORD=$DB_PASS"
    echo "SESSION_DRIVER=database"
    echo "SESSION_LIFETIME=120"
    echo "SESSION_ENCRYPT=false"
    echo "SESSION_SECURE_COOKIE=true"
    echo "SESSION_DOMAIN=null"
    echo "BROADCAST_CONNECTION=log"
    echo "FILESYSTEM_DISK=local"
    echo "QUEUE_CONNECTION=database"
    echo "CACHE_STORE=database"
    echo "MEMCACHED_HOST=127.0.0.1"
    echo "REDIS_CLIENT=phpredis"
    echo "REDIS_HOST=127.0.0.1"
    echo "REDIS_PASSWORD=null"
    echo "REDIS_PORT=6379"
    if [ -n "$MAIL_PASS" ]; then
      echo "MAIL_MAILER=smtp"
      echo "MAIL_HOST=smtp.gmail.com"
      echo "MAIL_PORT=587"
      echo "MAIL_SCHEME=tls"
      echo "MAIL_USERNAME=$MAIL_USER"
      echo "MAIL_PASSWORD=$MAIL_PASS"
      echo "MAIL_FROM_ADDRESS=$MAIL_USER"
    else
      echo "MAIL_MAILER=log"
      echo "MAIL_HOST=127.0.0.1"
      echo "MAIL_PORT=2525"
      echo "MAIL_USERNAME="
      echo "MAIL_PASSWORD="
      echo "MAIL_FROM_ADDRESS=noreply@kadetech.co.tz"
    fi
    echo "MAIL_FROM_NAME=\"\${APP_NAME}\""
    echo "AWS_ACCESS_KEY_ID="
    echo "AWS_SECRET_ACCESS_KEY="
    echo "AWS_DEFAULT_REGION=us-east-1"
    echo "AWS_BUCKET="
    echo "AWS_USE_PATH_STYLE_ENDPOINT=false"
    echo "VITE_APP_NAME=\"\${APP_NAME}\""
  } > .env
  chmod 640 .env
  echo ".env created."
else
  echo
  echo ".env already exists - leaving it untouched."
fi

# --- Dependencies -----------------------------------------------------------
if [ -f composer.phar ]; then
  COMPOSER="$PHP_BIN composer.phar"
elif command -v composer >/dev/null 2>&1; then
  COMPOSER="composer"
else
  COMPOSER=""
fi

if [ -n "$COMPOSER" ] && [ ! -f vendor/autoload.php ]; then
  echo
  echo "--- Installing PHP dependencies (slow the first time) ---"
  $COMPOSER install --no-dev --optimize-autoloader --no-interaction 2>&1 | tail -6
else
  COMPOSER=""
  echo
  echo "vendor/ already installed - skipping composer."
fi

# --- Application key --------------------------------------------------------
if ! grep -q '^APP_KEY=base64:' .env; then
  echo
  echo "--- Generating application key ---"
  $PHP_BIN artisan key:generate --force
else
  $PHP_BIN artisan key:generate --show >/dev/null 2>&1 || true
fi

# --- Housekeeping -----------------------------------------------------------
rm -f database/database.sqlite
chmod -R 775 storage bootstrap/cache 2>/dev/null || true
chmod 640 .env 2>/dev/null || true
chmod +x artisan

# --- Caches then migrate then re-cache --------------------------------------
echo
echo "--- Migrating ---"
$PHP_BIN artisan optimize:clear >/dev/null 2>&1 || true
$PHP_BIN artisan migrate --force --no-interaction

echo
echo "--- Rebuilding caches ---"
$PHP_BIN artisan config:cache
$PHP_BIN artisan route:cache
$PHP_BIN artisan view:cache

# --- Report -----------------------------------------------------------------
echo
echo "=============================================================="
echo " Deploy complete"
echo "=============================================================="
$PHP_BIN artisan about --only=environment 2>/dev/null | head -8
echo " DB driver : $($PHP_BIN artisan tinker --execute='echo config("database.default");' 2>/dev/null)"
echo " Mailer    : $($PHP_BIN artisan tinker --execute='echo config("mail.default");' 2>/dev/null)"
echo " Debug     : $($PHP_BIN artisan tinker --execute='echo config("app.debug") ? "ON (fix this)" : "off";' 2>/dev/null)"
echo " Manifest  : $([ -f public/build/manifest.json ] && echo present || echo MISSING)"
echo
echo " Next deploy: cd $APP_DIR && git pull && bash deploy.sh"
echo " After editing .env: php artisan optimize:clear && php artisan config:cache"
