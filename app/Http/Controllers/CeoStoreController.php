<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeoStoreController extends Controller
{
    public function index()
    {
        return view('component.landingPage.ceoStore.index');
    }
}
