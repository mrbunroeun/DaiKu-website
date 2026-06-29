<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function index()
    {
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
            'location'                => ['required', 'string', 'max:255'],
            'phone'                   => ['required', 'string', 'max:30'],
            'preferred_contact_time' => ['required', 'string', 'max:50'],
            'service_required'       => ['required', 'string', 'max:50'],
            'ac_units'                => ['nullable', 'string', 'max:50'],
            'notes'                   => ['nullable', 'string', 'max:2000'],
        ]);

        // TODO: persist the lead and/or send a notification email, e.g.:
        // ContactSubmission::create($validated);
        // Mail::to('daikumep@gmail.com')->send(new ContactFormSubmitted($validated));

        return response()->json([
            'message' => "Thank you! We've received your request and will contact you shortly.",
        ]);
    }
}