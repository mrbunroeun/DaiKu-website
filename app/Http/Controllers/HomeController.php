<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        // SEO Configuration for Homepage
        SEOTools::setTitle('BIO-NPK Liquid Fertilizers | Premium Agricultural Solutions');
        
        SEOTools::setDescription('High-quality BIO-NPK liquid fertilizers for better crop yield, root development, and plant health. Trusted solutions for modern farming and plantations.');
        
        SEOTools::metatags()->addMeta('keywords',['bio-npk', 'liquid fertilizer', 'organic fertilizer', 'npk fertilizer', 'crop nutrition', 'agricultural solutions']);
        
        // Set your website URL
        SEOTools::opengraph()->setUrl('https://www.daikumep.com');
        
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::opengraph()->addImage(asset('images/og-image.jpg')); // Optional: Add your homepage OG image
        
        // Twitter (optional)
        SEOTools::twitter()->setSite('@yourcompany'); // Change if you have Twitter

        return view('home');
    }
}