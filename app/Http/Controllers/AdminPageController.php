<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index()
    {
        return view('component.adminPage.dashboard');
    }

    public function profil()
    {
        return view('component.adminPage.profil.index');
    }
}
