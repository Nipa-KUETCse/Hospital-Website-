<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendRoomController extends Controller
{
    public function room()
    {
        return view('frontend.room');
    }
}
