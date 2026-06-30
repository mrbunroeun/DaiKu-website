<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'mechanical');

        // SEO for Services Page
        SEOTools::setTitle('Our Services | MEP, HVAC, Electrical, Plumbing & Fire Protection');

        SEOTools::setDescription('Professional MEP services in Phnom Penh including Mechanical (HVAC), Electrical Systems, Plumbing, Fire Protection, and Facility Maintenance. High-quality solutions for commercial and industrial buildings.');

        SEOTools::metatags()->addMeta('keywords',[
            'mep services', 'hvac services', 'electrical contractor', 
            'fire protection system', 'plumbing services', 'building maintenance',
            'commercial mep', 'daiku services', 'phnom penh mep'
        ]);

        // Open Graph
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');

        return view('Services.index', [
            'initialTab' => $tab
        ]);
    }
}