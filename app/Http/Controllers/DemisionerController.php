<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DemisionerController extends Controller
{
    public function index()
    {
        $demisioner = Demisioner::orderBy('nama', 'asc')->get();
        return view('component.adminPage.demisioner.index', compact('demisioner'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $demisioner = Demisioner::where('nama', 'like', '%' . $cari . '%')->paginate();
        return view('component.adminPage.demisioner.index', compact('demisioner'));
    }

    public function periode20_21()
    {
        $demisioner = Demisioner::where('periode', '2020-2021')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.demisioner.periode20-21', compact('demisioner'));
    }

    public function periode21_22()
    {
        $demisioner = Demisioner::where('periode', '2021-2022')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.demisioner.periode21-22', compact('demisioner'));
    }

    public function periode22_23()
    {
        $demisioner = Demisioner::where('periode', '2022-2023')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.demisioner.periode22-23', compact('demisioner'));
    }

    public function create()
    {
        return view('component.adminPage.demisioner.create');
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
            'jabatan' => 'required',
            'periode' => 'required',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('demisioner', 'public');
        }

        Demisioner::create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'angkatan' => $request->input('angkatan'),
            'jabatan' => $request->input('jabatan'),
            'periode' => $request->input('periode'),
            'gambar' => $file,
        ]);

        return redirect()->route('demisioner.admin')->with('status', 'Berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $demisioner = Demisioner::where('id', $id)->first();
        return view('component.adminPage.demisioner.update', compact('demisioner'));
    }

    public function update(Request $request, $id)
    {
        $demisioner = Demisioner::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('demisioner', 'public');
            if ($demisioner->gambar && file_exists(storage_path('app/public/' . $demisioner->gambar))) {
                Storage::delete('public/' . $demisioner->gambar);
                $file = $request->file('gambar')->store('demisioner', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $demisioner->gambar;
        }

        $demisioner->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'angkatan' => $request->input('angkatan'),
            'jabatan' => $request->input('jabatan'),
            'periode' => $request->input('periode'),
            'gambar' => $file,
        ]);

        return redirect()->route('demisioner.admin')->with('status', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = Demisioner::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('demisioner.admin');
    }
}
