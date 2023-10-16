<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;
use App\Models\Member;
use App\Models\Pengurus;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class KeanggotaanController extends Controller
{
    public function struktur_organisasi()
    {
        $inti = Pengurus::where('gol', 'INTI')->get();
        $io = Pengurus::where('gol', 'Information Officer')->get();
        $to = Pengurus::where('gol', 'Technical Officer')->get();
        $fo = Pengurus::where('gol', 'Financial Officer')->get();
        return view('component.landingPage.keanggotaan.struktur_organisasi.index', compact('inti', 'io', 'to', 'fo'));
    }

    public function demisioner()
    {
        $periode21_22 = Demisioner::where('periode', '2021-2022')->orderBy('nama', 'asc')->get();
        return view('component.landingPage.keanggotaan.demisioner.index', compact('periode21_22'));
    }

    public function member()
    {
        $angkatan6 = Member::where('angkatan', 'VI')->orderBy('nama', 'asc')->get();
        $angkatan7 = Member::where('angkatan', 'VII')->orderBy('nama', 'asc')->get();
        $angkatan8 = Member::where('angkatan', 'VIII')->orderBy('nama', 'asc')->get();
        $angkatan9 = Member::where('angkatan', 'IX')->orderBy('nama', 'asc')->get();
        return view('component.landingPage.keanggotaan.member.index', compact('angkatan6', 'angkatan7', 'angkatan8', 'angkatan9'));
    }
}
