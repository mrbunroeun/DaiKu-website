<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index()
    {
        // === SEO Configuration for Why Us Page ===
        SEOTools::setTitle('Why Choose Daiku MEP | Best MEP Contractor in Phnom Penh');

        SEOTools::setDescription('Discover why Daiku MEP is the trusted choice for HVAC, electrical, fire protection, and building maintenance in Phnom Penh. Quality, reliability, and professional service.');

        SEOTools::metatags()->addMeta('keywords',[
            'why choose daiku mep',
            'best mep contractor phnom penh',
            'reliable mep company cambodia',
            'hvac experts phnom penh',
            'mep contractor advantages',
            'professional building maintenance',
            'daiku mep why us',
            'quality mep services'
        ]);

        // === Main URL for this page ===
        SEOTools::opengraph()->setUrl(url('/why-us'));   // Change if your route is different

        // Extra recommended settings
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addProperty('site_name', 'Daiku MEP');
        SEOTools::opengraph()->addProperty('locale', 'en_US');

        // Optional: Add canonical URL
        SEOTools::metatags()->setCanonical(url('/why-us'));

        return view('whyus');
    }
}