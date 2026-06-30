<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Artesaos\SEOTools\Facades\SEOTools;   // ← Add this import

class ContactController extends Controller
{
    public function index()
    {
        // SEO for Contact Page
        SEOTools::setTitle('Contact Us - BIO-NPK Liquid Fertilizers');
        SEOTools::setDescription('Get in touch with our team for premium BIO-NPK liquid fertilizer solutions. Fast response, expert consultation, and tailored agricultural support.');
        
        // Optional: More SEO settings
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@yourcompany'); // if you have Twitter
        
        return view('contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'                   => ['required', 'string', 'max:255'],
            'company_name'           => ['nullable', 'string', 'max:255'],
            'location'               => ['required', 'string', 'max:255'],
            'phone'                  => ['required', 'string', 'max:30'],
            'preferred_contact_time' => ['required', 'string', 'max:50'],
            'service_required'       => ['required', 'string', 'max:50'],
            'ac_units'               => ['nullable', 'string', 'max:50'],
            'notes'                  => ['nullable', 'string', 'max:2000'],
        ]);

        // TODO: Save to database and/or send email
        // ContactSubmission::create($validated);
        // Mail::to('daikumep@gmail.com')->send(new ContactFormSubmitted($validated));

        // Optional: SEO for success response (if needed)
        // SEOTools::setTitle('Thank You - Contact Request Received');

        return response()->json([
            'success' => true,
            'message' => "Thank you! We've received your request and will contact you shortly.",
        ]);
    }
}