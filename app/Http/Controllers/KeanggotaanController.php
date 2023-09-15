<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    public function struktur_organisasi()
    {
        return view('component.landingPage.keanggotaan.struktur_organisasi.index');
    }

    public function demisioner()
    {
        return view('component.landingPage.keanggotaan.demisioner.index');
    }
}
