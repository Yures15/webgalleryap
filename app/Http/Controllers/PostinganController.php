<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostinganController extends Controller
{
    //upload postingan
    public function AddPostingan (Request $request){
        $request->validate([
            'judul_foto' => 'required',
            'deskripsi_foto' => 'required',
            'url' => 'required|mimes:jpeg,png,jpg'
        ]);

        $foto_file = $request->file('url');
        $foto_extention = $foto_file->extension();
        $foto_nama = date('dmyhis').'.'.$foto_extention;
        $foto_file->move(public_path('/foto'), $foto_nama);

        $data = [
            'judul_foto' => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi_foto,
            'url' => $foto_nama,
            'id_user' => Auth::user()->id,
        ];

        $validate = Foto::create($data);

        if($validate == true){
            return redirect('/upload')->with('success', 'Postingan berhasil di upload');
        } else {
            return redirect()->back();
        }
    }
}
