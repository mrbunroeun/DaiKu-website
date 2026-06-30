<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'company'      => 'nullable|string|max:255',
            'location'     => 'required|string|max:255',
            'phone'        => 'required|string|max:30',
            'contact_time' => 'required|in:morning,afternoon,evening',
            'service'      => 'required|in:free_inspection,amc,commercial,residential',
            'ac_units'     => 'required|in:1-3,4-10,11-20,20+',
            'notes'        => 'nullable|string',
        ]);

        // TODO: Send Email
        // Mail::to('info@daikumep.com')->send(new \App\Mail\ContactSubmitted($validated));

        // TODO: Save to database (recommended)
        // \App\Models\ContactRequest::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Thank you! Your request has been submitted successfully. We will contact you shortly.');
    }
}