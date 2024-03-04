<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:255',
            'bio' => 'nullable|string|max:255',
        ]);

        $user->update($request->only('nama_lengkap', 'no_telepon', 'jenis_kelamin', 'alamat', 'bio'));

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }

    public function updateavatar(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('avatar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $user->update(['avatar' => 'uploads/' . $imageName]);

        return redirect()->back()->with('success', 'Foto profil berhasil diperbarui.');
    }

}
