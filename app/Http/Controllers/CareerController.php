<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class CareerController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Careers | Daiku');
        SEOTools::setDescription('Explore career opportunities at Daiku. Join our team and help build high-quality construction projects.');
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->setUrl(url()->current());

        return view('career');
    }
}