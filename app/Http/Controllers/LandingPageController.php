<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing()
    {
        return view('landingpage.index');

    }

    public function information()
    {
        return view('landingpage.information_detail');

    }
}
