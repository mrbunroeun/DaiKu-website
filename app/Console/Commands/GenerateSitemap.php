<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap.xml file';

    public function handle()
    {
        $sitemap = SitemapGenerator::create('https://www.daikumep.com')
            ->getSitemap();

        // Add static pages
        $sitemap->add(Url::create('/')->setPriority(1.0));
        $sitemap->add(Url::create('/services')->setPriority(0.9));
        $sitemap->add(Url::create('/projects')->setPriority(0.8));
        $sitemap->add(Url::create('/insights')->setPriority(0.8));
        $sitemap->add(Url::create('/contact')->setPriority(0.7));

        // Example: Add dynamic pages (projects or articles)
        // $sitemap->add(Url::create('/project/some-project-slug'));

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully at: public/sitemap.xml');
    }
}