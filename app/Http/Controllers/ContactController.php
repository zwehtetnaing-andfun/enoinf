<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submitGeneral(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'corporate' => 'required|string|max:255',
            'yourname' => 'required|string|max:255',
            'kana' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'zip' => 'nullable|string|max:20',
            'pref' => 'required|string',
            'address1' => 'required|string|max:500',
            'address2' => 'nullable|string|max:500',
            'tel' => 'required|string|max:20',
            'fax' => 'nullable|string|max:20',
            'message' => 'required|string',
            'howtoknow' => 'nullable|string',
            'sonota' => 'nullable|string',
        ]);

        // Send email to admin
        Mail::to('zwehtet.dev@gmail.com')->send(new ContactFormMail($validated, 'admin'));
        
        // Send confirmation email to customer
        Mail::to($validated['email'])->send(new ContactFormMail($validated, 'customer'));

        return back()->with('success', true);
    }
}
