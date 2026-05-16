<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $info = [
            ['icon' => '📍', 'label' => 'Office Address', 'value' => 'H-12/A, Road-110, Gulshan 2, Dhaka-1212, Bangladesh'],
            ['icon' => '📞', 'label' => 'Phone', 'value' => '+88 01894 70 99 95', 'link' => 'tel:+8801894709995'],
            ['icon' => '✉️', 'label' => 'Email', 'value' => 'info@tstwhitehouseltd.com', 'link' => 'mailto:info@tstwhitehouseltd.com'],
            ['icon' => '🌐', 'label' => 'Website', 'value' => 'www.tstwhitehouseltd.com', 'link' => 'https://www.tstwhitehouseltd.com'],
            ['icon' => '🪪', 'label' => 'Trade License', 'value' => 'TRAD/DNCC/029301/2023'],
            ['icon' => '🔢', 'label' => 'TIN Number', 'value' => '716874504619'],
        ];

        return view('pages.contact', compact('info'));
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Mail sending logic would go here in production
        // Mail::to('info@tstwhitehouseltd.com')->send(new ContactMail($validated));

        return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
    }
}
