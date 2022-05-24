<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendLoginController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }
}
