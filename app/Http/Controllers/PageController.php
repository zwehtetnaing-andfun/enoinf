<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacy()
    {
        return view('privacy');
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
}
