<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }

    public function tenders()
    {
        return view('frontend.tenders');
    }

    public function awards()
    {
        return view('frontend.awards');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function press()
    {
        return view('frontend.press');
    }
}
