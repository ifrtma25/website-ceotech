<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('component.adminPage.pengurus.index', compact('pengurus'));
    }

    public function create()
    {
        return view('component.adminPage.pengurus.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Belum diinput'
        ];

        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
            'macaddress' => 'required',
            'jabatan' => 'required',
            'jurusan' => 'required',
            'gol' => 'required',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('pengurus', 'public');
        }

        Pengurus::create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'macaddress' => $request->input('macaddress'),
            'jabatan' => $request->input('jabatan'),
            'jurusan' => $request->input('jurusan'),
            'gol' => $request->input('gol'),
            'gambar' => $file,
        ]);

        return redirect()->route('pengurus_admin')->with('status', 'Berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $pengurus = Pengurus::where('id', $id)->first();
        return view('component.adminPage.pengurus.update', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = Pengurus::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('pengurus', 'public');
            if ($pengurus->gambar && file_exists(storage_path('app/public/' . $pengurus->gambar))) {
                Storage::delete('public/' . $pengurus->gambar);
                $file = $request->file('gambar')->store('pengurus', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $pengurus->gambar;
        }

        $pengurus->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'macaddress' => $request->input('macaddress'),
            'jabatan' => $request->input('jabatan'),
            'jurusan' => $request->input('jurusan'),
            'gol' => $request->input('gol'),
            'gambar' => $file,
        ]);

        return redirect()->route('pengurus_admin')->with('status', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = Pengurus::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('pengurus_admin')->with('status', 'Berhasil dihapus');
    }
}
