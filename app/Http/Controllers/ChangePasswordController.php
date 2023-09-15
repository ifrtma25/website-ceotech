<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('auth.passwords.change');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('dashboard_admin')->with('status', 'Password berhasil diubah');
        } else {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai.'])->withInput();
        }
    }
}
