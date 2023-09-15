<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index_profil()
    {
        return view('component.landingPage.profil.index');
    }
}
