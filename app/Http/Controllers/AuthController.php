<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Trigerlogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('register');
    }

    public function registered(Request $request){
        $pesan = [
            'email.required' => 'Email Tidak Boleh Kosong',
            'email.unique' => 'Email Sudah Terpakai',
            'username.required' => 'Username Tidak Boleh Kosong',
            'username.unique' => 'Username Sudah Terpakai',
            'password.required' => 'Username Tidak Boleh Kosong',
            'password.min' => 'Password Maksimal 6 Digit',
        ];

        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'tgl_lahir' => 'required',
        ],$pesan);
        $dataStore = [
            'username' =>$request->username,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'tgl_lahir' =>$request->tgl_lahir,
        ];
        User::create($dataStore);
        return redirect('/register')->with('success', 'Data Berhasil Disimpan');
    }

    public function auth(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){

            $request->session()->regenerate();
            Trigerlogin::create([
                'id_user'=>Auth::user()->id
            ]);
            return redirect('/explore')->with('success', 'Anda Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Username atau Password Salah');
        }
    }

    public function logout(Request $request){
        $user = Auth::user();

        if ($user) {
            Trigerlogin::where('id_user', $user->id)->delete();
        }

        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
