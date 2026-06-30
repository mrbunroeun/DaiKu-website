<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class ProjectController extends Controller
{
    public function show($project)
    {
        // Convert slug to readable title
        $projectName = str_replace(['-', '_'], ' ', ucwords($project));

        // SEO Meta Tags
        SEOTools::setTitle($projectName . ' | MEP Project | Daiku MEP Cambodia');
        // Example length: ~55-60 characters

        SEOTools::setDescription(
            'Discover our MEP project at ' . $projectName . 
            '. Professional HVAC, Electrical, Plumbing, Fire Protection, and Building Maintenance solutions delivered for high-quality commercial developments in Cambodia.'
        );
        // Description length: ~145-155 characters

        SEOTools::metatags()->addMeta('keywords',[
            'mep project', 'commercial mep', 'hvac installation', 
            'electrical systems', 'fire protection', 'building maintenance',
            'daiku mep', 'phnom penh project', 'mep contractor cambodia'
        ]);

        // Open Graph
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        
        // Optional: Add project image if available
        // SEOTools::opengraph()->addImage(asset("images/projects/{$project}.jpg"));

        return view('professional.project-show', compact('project'));
    }
}