<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class ProjectCredentialController extends Controller
{
    public function index()
    {
        // SEO for Projects / Credentials Page
        SEOTools::setTitle('Our Projects & Credentials | Daiku MEP Cambodia');

        SEOTools::setDescription('Explore our portfolio of successful MEP projects in Phnom Penh and Cambodia. HVAC, Electrical, Plumbing, Fire Protection, and Facility Management works for hotels, commercial buildings, and industrial facilities.');

        SEOTools::metatags()->addMeta('keywords',[
            'mep projects', 'project portfolio', 'hvac projects', 
            'electrical projects', 'commercial mep', 'daiku projects',
            'phnom penh mep', 'mep contractor cambodia', 'building projects'
        ]);

        // Open Graph
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');

        return view('project');
    }
}