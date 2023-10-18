<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::orderBy('nama', 'asc')->paginate(10);
        return view('component.adminPage.member.index', compact('member'));
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $member = Member::where('nama', 'like', '%' . $cari . '%')->paginate();
        return view('component.adminPage.member.index', compact('member'));
    }

    public function index_angkatan6()
    {
        $member = Member::where('angkatan', 'VI')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.member.angkatan6', compact('member'));
    }

    public function index_angkatan7()
    {
        $member = Member::where('angkatan', 'VII')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.member.angkatan7', compact('member'));
    }

    public function index_angkatan8()
    {
        $member = Member::where('angkatan', 'VIII')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.member.angkatan8', compact('member'));
    }

    public function index_angkatan9()
    {
        $member = Member::where('angkatan', 'IX')->orderBy('nama', 'asc')->get();
        return view('component.adminPage.member.angkatan9', compact('member'));
    }

    public function create()
    {
        return view('component.adminPage.member.create');
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
            'gambar' => 'required',
        ], $message);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('member', 'public');
        }

        $npm = $request->input('npm');

        if (Member::where('npm', $npm)->exists()) {
            return redirect()->route('member_admin')->with('error', 'Data sudah ada');
        }

        Member::create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'angkatan' => $request->input('angkatan'),
            'jurusan' => $request->input('jurusan'),
            'gambar' => $file,
        ]);

        return redirect()->route('member_admin')->with('status', 'Berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $member = Member::where('id', $id)->first();
        return view('component.adminPage.member.update', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('member', 'public');
            if ($member->gambar && file_exists(storage_path('app/public/' . $member->gambar))) {
                Storage::delete('public/' . $member->gambar);
                $file = $request->file('gambar')->store('member', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $member->gambar;
        }

        $member->update([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'angkatan' => $request->input('angkatan'),
            'jurusan' => $request->input('jurusan'),
            'gambar' => $file,
        ]);

        return redirect()->route('member_admin')->with('status', 'Berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = Member::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('member_admin')->with('status', 'Berhasil dihapus');
    }
}
