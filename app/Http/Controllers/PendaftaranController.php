<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('component.landingPage.pendaftaran.create');
    }

    public function index()
    {
        $pendaftar = Pendaftaran::orderBy('nama', 'asc')->get();
        return view('component.adminPage.pendaftar.index', compact('pendaftar'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pendaftar = Pendaftaran::where('npm', 'like', '%' . $cari . '%')->paginate();
        return view('component.adminPage.pendaftar.index', compact('pendaftar'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Belum diinput'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'minat_bakat' => 'required',
            'no_hp' => 'required',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('pendaftar', 'public');
        }

        Pendaftaran::create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'angkatan' => $request->input('angkatan'),
            'jurusan' => $request->input('jurusan'),
            'minat_bakat' => $request->input('minat_bakat'),
            'no_hp' => $request->input('no_hp'),
            'gambar' => $file
        ]);

        return redirect()->route('dashboard')->with('status', 'Berhasil daftar');
    }

    public function delete($id)
    {
        $delete = Pendaftaran::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('pendaftar')->with('status', 'Berhasil dihapus');
    }
}
