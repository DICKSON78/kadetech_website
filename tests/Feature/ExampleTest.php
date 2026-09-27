<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_displays_kadetech_services_and_contact_details(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('KADETECH')
            ->assertSee('masthead-nav-link', false)
            ->assertSee('fa-solid fa-house', false)
            ->assertSee('fa-solid fa-layer-group', false)
            ->assertSee('fa-solid fa-compass-drafting', false)
            ->assertSee('fa-solid fa-diagram-project', false)
            ->assertSee('Websites made to perform.')
            ->assertSee('Intelligence built for your business.')
            ->assertSee('Security you can count on.')
            ->assertSee('kadetech.online@gmail.com')
            ->assertSee('kadetech-african-tech.jpg', false)
            ->assertSee('kadetech-web-development.jpg', false)
            ->assertSee('kadetech-ai-machine-learning.jpg', false)
            ->assertSee('kadetech-camera-security.jpg', false)
            ->assertSee('fa-solid fa-laptop-code', false)
            ->assertSee('All rights reserved.')
            ->assertSee('Back to top');
    }

    public function test_public_pages_are_available(): void
    {
        $pages = [
            'home' => 'Digital power.',
            'services' => 'Services in detail',
            'why-us' => 'Good technology starts with a better question.',
            'projects' => 'What we have built',
            'contact' => 'A clear next step starts here.',
        ];

        foreach ($pages as $routeName => $content) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertSee('KADETECH')
                ->assertSee('data-page-content', false)
                ->assertSee('data-page-link', false)
                ->assertSee($content);
        }
    }

    public function test_every_public_page_exposes_search_and_share_metadata(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $response = $this->get(route($routeName))->assertOk();

            $response->assertSee('<link rel="canonical" href="'.route($routeName).'">', false)
                ->assertSee('name="robots" content="index, follow, max-image-preview:large"', false)
                ->assertSee('property="og:type" content="website"', false)
                ->assertSee('property="og:title"', false)
                ->assertSee('property="og:description"', false)
                ->assertSee('property="og:image" content="'.asset('images/kade-og.jpg').'"', false)
                ->assertSee('name="twitter:card" content="summary_large_image"', false)
                ->assertSee('type="application/ld+json"', false);
        }
    }

    public function test_public_pages_publish_distinct_titles_and_descriptions(): void
    {
        $titles = [];
        $descriptions = [];

        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $html = $this->get(route($routeName))->assertOk()->getContent();

            preg_match('/<title>(.*?)<\/title>/s', $html, $titleMatch);
            preg_match('/name="description" content="(.*?)"/s', $html, $descriptionMatch);

            $this->assertNotEmpty($titleMatch[1] ?? '', "{$routeName} is missing a title");
            $this->assertNotEmpty($descriptionMatch[1] ?? '', "{$routeName} is missing a description");

            $titles[] = $titleMatch[1];
            $descriptions[] = $descriptionMatch[1];

            $this->assertLessThanOrEqual(60, mb_strlen($titleMatch[1]), "{$routeName} title is too long for search results");
            $this->assertGreaterThan(50, mb_strlen($descriptionMatch[1]), "{$routeName} description is too thin");
            $this->assertLessThanOrEqual(160, mb_strlen($descriptionMatch[1]), "{$routeName} description is too long");
        }

        $this->assertCount(count($titles), array_unique($titles), 'Titles must be unique per page');
        $this->assertCount(count($descriptions), array_unique($descriptions), 'Descriptions must be unique per page');
    }

    public function test_sitemap_lists_every_public_page_as_xml(): void
    {
        $response = $this->get(route('sitemap'))->assertOk();

        $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');

        $xml = $response->getContent();

        $this->assertStringStartsWith('<?xml version="1.0" encoding="UTF-8"?>', $xml);
        $this->assertStringContainsString('http://www.sitemaps.org/schemas/sitemap/0.9', $xml);

        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $this->assertStringContainsString('<loc>'.route($routeName).'</loc>', $xml);
        }

        $this->assertSame(
            substr_count($xml, '<url>'),
            substr_count($xml, '</url>'),
            'Every sitemap url element must be closed',
        );
    }

    public function test_robots_txt_advertises_the_sitemap(): void
    {
        $robots = file_get_contents(public_path('robots.txt'));

        $this->assertStringContainsString('User-agent: *', $robots);
        $this->assertStringContainsString('Sitemap: https://kadetech.co.tz/sitemap.xml', $robots);
    }

    public function test_all_public_heroes_use_the_shared_services_shell(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertSee('bg-navy-900 pb-20 pt-32 text-white', false)
                ->assertSee('hero-grid opacity-60', false)
                ->assertSee('lg:grid-cols-[0.82fr_1.18fr]', false)
                ->assertSee('text-[2.8rem]', false);
        }
    }

    public function test_projects_page_renders_the_scrolling_project_steps(): void
    {
        $this->get(route('projects'))
            ->assertOk()
            ->assertSee('id="projects"', false)
            ->assertSee('What we have built')
            ->assertSee('E-Kanisa')
            ->assertSee('KADEPOS')
            ->assertSee('KADEFinance')
            ->assertSee('REMS')
            ->assertSee('id="e-kanisa"', false)
            ->assertSee('id="kadepos"', false)
            ->assertSee('id="kadefinance"', false)
            ->assertSee('id="rems"', false)
            ->assertSee('data-project-step', false)
            ->assertDontSee('data-project-dot', false)
            ->assertDontSee('project-dots', false)
            ->assertDontSee('Work Experience')
            ->assertDontSee('A professional journey')
            ->assertDontSee('National Office Auditing of Tanzania');
    }

    public function test_services_page_links_to_the_built_systems(): void
    {
        $this->get(route('services'))
            ->assertOk()
            ->assertSee(route('projects').'#e-kanisa', false)
            ->assertSee(route('projects').'#kadepos', false)
            ->assertSee(route('projects').'#rems', false)
            ->assertDontSee('View category');
    }

    public function test_header_topbar_shows_contact_details_with_icons(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('fa-solid fa-location-dot', false)
            ->assertSee('Dodoma, Tanzania')
            ->assertSee('fa-solid fa-envelope', false)
            ->assertSee('fa-solid fa-circle-check', false)
            ->assertSee('fa-solid fa-phone', false)
            ->assertSee('kadetech.online@gmail.com')
            ->assertDontSee('software company')
            ->assertDontSee('Independent digital + security studio')
            ->assertDontSee('Dodoma &middot; Tanzania', false);
    }

    public function test_mobile_menu_toggle_hides_the_inactive_icon_with_the_hidden_attribute(): void
    {
        $response = $this->get(route('home'))->assertOk();

        $response->assertSee('<i data-close-icon class="fa-solid fa-xmark h-5 w-5" hidden', false)
            ->assertDontSee('<i data-menu-icon class="fa-solid fa-bars h-5 w-5" hidden', false)
            ->assertDontSee('fa-xmark hidden', false);
    }

    public function test_production_forces_the_https_scheme(): void
    {
        $this->app['env'] = 'production';

        (new AppServiceProvider($this->app))->boot();

        $this->assertStringStartsWith('https://', URL::to('/'));
    }

    public function test_non_production_environments_do_not_force_https(): void
    {
        $this->app['env'] = 'local';

        (new AppServiceProvider($this->app))->boot();

        $this->assertStringStartsWith('http://', URL::to('/'));
    }

    public function test_public_heroes_have_no_vertical_line_decoration(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $this->get(route($routeName))
                ->assertOk()
                ->assertDontSee('left-[7%]', false);
        }
    }

    public function test_public_heroes_drop_the_eyebrow_label(): void
    {
        foreach (['home', 'services', 'why-us', 'projects', 'contact'] as $routeName) {
            $content = $this->get(route($routeName))
                ->assertOk()
                ->getContent();

            $heroStart = strpos($content, 'class="relative z-10 reveal is-visible"');
            $heroEnd = strpos($content, '</h1>', $heroStart);

            $this->assertNotFalse($heroStart, "Hero wrapper missing on [{$routeName}].");
            $this->assertNotFalse($heroEnd, "Hero heading missing on [{$routeName}].");

            $hero = substr($content, $heroStart, $heroEnd - $heroStart);

            $this->assertStringNotContainsString('eyebrow', $hero);
            $this->assertStringContainsString('text-[2.8rem]', $hero);
        }
    }

    public function test_contact_page_displays_map_and_form(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('Tell us what you need.')
            ->assertSee('google.com/maps', false)
            ->assertSee('name="name"', false)
            ->assertSee('name="message"', false)
            ->assertSee('data-ajax-form', false)
            ->assertSee(route('contact.submit'), false);
    }

    public function test_contact_form_sends_a_message(): void
    {
        Mail::fake();

        $response = $this->post(route('contact.submit'), [
            'name' => 'Asha Mwakalinga',
            'email' => 'asha@example.com',
            'service' => 'web',
            'message' => 'I need a responsive website for my growing business.',
        ]);

        $response
            ->assertRedirect(route('contact'))
            ->assertSessionHas('contact_success');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail): bool {
            return $mail->hasTo('kadetech.online@gmail.com')
                && $mail->data['email'] === 'asha@example.com'
                && $mail->data['service_label'] === 'Website or platform';
        });
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $this->post(route('contact.submit'), [])
            ->assertSessionHasErrors(['name', 'email', 'service', 'message']);
    }
}
