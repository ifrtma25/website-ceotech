<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('component.landingPage.dashboard');
    }

    public function profile()
    {
        return view('component.landingPage.about.profile');
    }
}
