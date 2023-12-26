<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function gallery()
    {
        return view('component.landingPage.gallery.index');
    }

    public function index()
    {
        $gallery = Gallery::all();
        return view('component.adminPage.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('component.adminPage.gallery.create');
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Belum Diinput'
        ];

        $this->validate($request, [
            'image' => 'required',
            'tanggal' => 'required',
            'ket' => 'required',
        ], $message);

        if ($request->file('image')) {
            $file = $request->file('image')->store('gallery', 'public');
        }

        Gallery::create([
            'image' => $file,
            'tanggal' => $request->input('tanggal'),
            'ket' => $request->input('ket'),
        ]);
    }

    public function edit(Request $request, $id)
    {
        $gallery = Gallery::where('id', $id)->first();
        return view('component.adminPage.gallery.create');
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::where('id', $id)->first();

        if ($request->file('image')) {
            $file = $request->file('image')->store('gallery', 'public');
            if ($gallery->gambar && file_exists(storage_path('app/public/' . $gallery->gambar))) {
                Storage::delete('public/' . $gallery->gambar);
                $file = $request->file('gambar')->store('member', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $gallery->image;
        }

        $gallery->update([
            'image' => $file,
            'tanggal' => $request->input('tanggal'),
            'ket' => $request->input('ket'),
        ]);

        return redirect()->route('gallery.admin')->with('status', 'Berhasil di tambahkan');
    }
}
