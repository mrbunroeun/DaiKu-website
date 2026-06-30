<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class AboutController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('About Us | Daiku');
        SEOTools::setDescription('Learn more about Daiku, our construction services, expertise, and commitment to quality.');

        return view('about');
    }
}