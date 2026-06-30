<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class MaintenanceController extends Controller
{
    public function index()
    {
        // SEO for Maintenance Page
        SEOTools::setTitle('Building Maintenance Services | Commercial & Industrial | Daiku');
        
        SEOTools::setDescription('Professional maintenance services for commercial and industrial buildings. HVAC, Electrical, Plumbing, Fire Protection systems maintenance with Annual Maintenance Contracts (AMC).');
        
        SEOTools::metatags()->addMeta('keywords',['building maintenance', 'commercial maintenance', 'HVAC maintenance', 'electrical maintenance', 'facility management', 'AMC', 'preventive maintenance']);

        // Open Graph
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        // SEOTools::opengraph()->addImage(asset('images/maintenance-og.jpg')); // Uncomment if you have an image

        return view('Maintenance');
    }
}