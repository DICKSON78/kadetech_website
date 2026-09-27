<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * The public marketing pages, newest content first.
     *
     * @var list<array{path: string, priority: string, changefreq: string}>
     */
    private const PAGES = [
        ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['path' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['path' => '/projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['path' => '/why-us', 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['path' => '/contact', 'priority' => '0.6', 'changefreq' => 'yearly'],
    ];

    public function __invoke(): Response
    {
        $lastModified = now()->toAtomString();

        $urls = collect(self::PAGES)
            ->map(fn (array $page): string => sprintf(
                "    <url>\n        <loc>%s</loc>\n        <lastmod>%s</lastmod>\n        <changefreq>%s</changefreq>\n        <priority>%s</priority>\n    </url>",
                url($page['path']),
                $lastModified,
                $page['changefreq'],
                $page['priority'],
            ))
            ->implode("\n");

        $xml = <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        {$urls}
        </urlset>
        XML;

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }
}
