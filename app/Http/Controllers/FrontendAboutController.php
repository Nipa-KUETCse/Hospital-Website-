<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendAboutController extends Controller
{
    public function about()
    {
        return view('frontend.about');
    }
}
