<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendAmenitiesController extends Controller
{
    public function amenities()
    {
        return view('frontend.amenities');
    }
}
