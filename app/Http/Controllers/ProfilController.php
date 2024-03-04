<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function getdataprofile(Request $request)
    {
        $data = auth()->user();
        return response()->json([
            'data'      => $data
        ], 200);
    }

    public function getdata(Request $request){
        $explore = Foto::with(['likes'])->withCount(['likes','komentars'])->where('id_user', auth()->id())->paginate(4);
        return response()->json([
            'datapost' =>$explore,
            'statuscode' => 200,
            'id' => auth()->user()->id
        ]);
    }
    public function update(Request $request)
    {
       $user = auth()->user();
       if ($request->hasFile('avatar')) {
       $avatar = $request->file('avatar');
       $extensi = $avatar->getClientOriginalExtension();
       $filename = 'users' . now()->timestamp .'.'. $extensi;
       $avatar->move('assets', $filename);
       $user->avatar = $filename;
       } else {
        $avatar = $user->avatar;
       }
       $user->nama_lengkap = $request->nama_lengkap;
       $user->no_telepon = $request->no_telepon;
       $user->jenis_kelamin = $request->jenis_kelamin;
       $user->alamat = $request->alamat;
       $user->bio = $request->bio;

       $user->save();

       return redirect()->back()->with('success', 'Profil Berhasil Di Perbaharui');
    }

    public function ubahpassword(Request $request){
        $pesan = [
            'password_lama.required' => 'Password lama harus diisi',
            'password_baru.required' => 'Password baru harus diisi',
            'password_baru.min' => 'Password minimal 8 karakter',
            'confirm_password.required' => 'Konfirmasi password yang harus di isi',
            'confirm_password.same' => 'Konfirmasi password harus sama dengan password baru'
        ];

        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8',
            'confirm_password' => 'required|same:password_baru'
        ],$pesan);

        $user = auth()->user();

        if (!Hash::check($request->password_lama, $user->password)){
            return redirect()->back()->with('error', 'Password lama salah');
        } else {
            $user->update([
                'password' => Hash::make($request->password_baru)
            ]);
            return redirect()->back()->with('success', 'Password berhasil di ubah');
        }
    }

}
