<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class InsightController extends Controller
{
    public function index()
    {
        // SEO for Insights Listing Page
        SEOTools::setTitle('Insights & Articles | MEP, HVAC, Electrical & Facility Management');
        SEOTools::setDescription('Expert insights on MEP systems, HVAC, electrical works, fire protection, and facility management for commercial and industrial buildings.');
        SEOTools::metatags()->addMeta('keywords',['MEP', 'HVAC', 'electrical systems', 'fire protection', 'facility management', 'commercial building', 'building maintenance']);

        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');

        return view('insights');
    }

    public function show($category, $slug)
    {
        $articles = $this->articles();

        abort_unless(isset($articles[$category][$slug]), 404);

        $article = $articles[$category][$slug];

        // SEO for Individual Article Page
        SEOTools::setTitle($article['title'] . ' | Daiku Insights');

        // Clean description from body (120-160 characters)
        $description = strip_tags($article['body']);
        $description = substr(trim($description), 0, 157);
        if (strlen($description) === 157) {
            $description .= '...';
        }

        SEOTools::setDescription($description);

        SEOTools::metatags()->addMeta('keywords',[
            $article['tag'],
            'MEP',
            'commercial building',
            'HVAC',
            'electrical systems',
            'facility management'
        ]);

        // Open Graph
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::opengraph()->addImage(asset($article['image']));

        return view('insights.show', [
            'category' => $category,
            'article'  => $article,
        ]);
    }

    protected function articles(): array
    {
        return [
            'mechanical' => [
                'hvac-importance' => [
                    'tag'   => 'Mechanical & HVAC',
                    'title' => 'What Is HVAC and Why Is It Important for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Heating, Ventilation, and Air Conditioning (HVAC) systems play a critical role in modern commercial buildings. Whether it is an office building, hotel, shopping mall, hospital, restaurant, or retail store, HVAC systems help maintain indoor comfort, improve air quality, and support efficient building operations.

A properly designed and maintained HVAC system not only creates a comfortable environment for occupants but also contributes to energy efficiency, operational reliability, and long-term cost savings.",
                ],
            ],

            'electrical' => [
                'systems-required' => [
                    'tag'   => 'Electrical',
                    'title' => 'What Electrical Systems Are Required for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Electrical systems are one of the most critical components of any commercial building. A properly designed electrical system ensures safe, efficient, and reliable operations.",
                ],
                'power-distribution' => [
                    'tag'   => 'Electrical',
                    'title' => 'Power Distribution & Backup Systems for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Power distribution systems distribute electricity from the utility source to equipment, lighting, and building systems. Backup power ensures critical operations continue during outages.",
                ],
                'low-voltage' => [
                    'tag'   => 'Electrical',
                    'title' => 'Low Voltage & Building Automation Systems',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Low voltage systems support communication, security, and operational technologies including CCTV, access control, structured cabling, and building management systems.",
                ],
            ],

            'plumbing' => [
                'fire-protection' => [
                    'tag'   => 'Plumbing & Fire',
                    'title' => 'What Fire Protection Systems Are Required for Commercial Buildings?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Fire safety is one of the most important considerations in commercial building design and operation.",
                ],
                'fm200' => [
                    'tag'   => 'Plumbing & Fire',
                    'title' => 'FM-200 Fire Suppression Systems for Server Rooms & Data Centers',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "FM-200 systems use a clean agent to suppress fires without damaging sensitive equipment.",
                ],
            ],

            'mep' => [
                'consultants-timing' => [
                    'tag'   => 'MEP Design',
                    'title' => 'When Should MEP Consultants Be Involved in a Project?',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "MEP consultants should be involved as early as possible for better planning, performance, and project outcomes.",
                ],
            ],

            'facility' => [
                'maintenance-plan' => [
                    'tag'   => 'Facility',
                    'title' => 'Creating a Maintenance Plan for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "A well-maintained building operates more efficiently, experiences fewer breakdowns, and provides a safer environment for occupants.",
                ],
                'amc-benefits' => [
                    'tag'   => 'Facility',
                    'title' => 'Benefits of Annual Maintenance Contracts for Commercial Buildings',
                    'image' => 'assets/images/photo/Frame5.png',
                    'body'  => "Annual Maintenance Contracts (AMC) help ensure consistent maintenance, priority support, and reduced repair costs.",
                ],
            ],
        ];
    }
}