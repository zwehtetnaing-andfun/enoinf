<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }

    // Contact form pages
    public function contactPress()
    {
        return view('contact.press');
    }

    public function contactPhonics()
    {
        return view('contact.phonics');
    }

    public function contactMukashi()
    {
        return view('contact.mukashi');
    }

    public function contactGame()
    {
        return view('contact.game');
    }

    public function contactKoudan()
    {
        return view('contact.koudan');
    }

    public function contactAnger()
    {
        return view('contact.anger');
    }

    public function contactGeneral()
    {
        return view('contact.general');
    }

    private function validateCommonFields(Request $request)
    {
        $rules = [
            'type' => 'nullable|string',
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
            'url' => 'nullable|string|max:255',
            'media' => 'required|string|max:255',
            'mediaurl' => 'nullable|string|max:255',
        ];

        $messages = [
            'corporate.required' => 'これは必須項目です。',
            'yourname.required' => 'これは必須項目です。',
            'kana.required' => 'フリガナは全角カナで入力してください。',
            'email.required' => 'これは必須項目です。',
            'email.email' => 'メールアドレスの形式で入力してください。',
            'pref.required' => 'これは必須項目です。',
            'address1.required' => 'これは必須項目です。',
            'tel.required' => 'これは必須項目です。',
            'message.required' => 'これは必須項目です。',
            'media.required' => 'これは必須項目です。',
        ];

        return $request->validate($rules, $messages);
    }

    private function sendEmails($validated)
    {
        // Send email to admin
        Mail::to('zwehtet.dev@gmail.com')->send(new ContactFormMail($validated, 'admin'));
        
        // Send confirmation email to customer
        Mail::to($validated['email'])->send(new ContactFormMail($validated, 'customer'));
    }

    public function submitGeneral(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitPress(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitPhonics(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitMukashi(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitGame(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitKoudan(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }

    public function submitAnger(Request $request)
    {
        $validated = $this->validateCommonFields($request);
        $this->sendEmails($validated);
        return back()->with('success', true);
    }
}
