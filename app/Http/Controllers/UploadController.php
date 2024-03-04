<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request){
        $user = auth()->user();
        $albums = Album::where('id_user', $user->id)->get();
        return view('page.upload', compact('user', 'albums'));
    }

    public function uploadfoto(Request $request){
        $filenya = $request->file('url');
        if($request->hasfile('url')) {
            $filename = pathinfo($filenya, PATHINFO_FILENAME);
            $ektensi = $filenya->getClientOriginalExtension();
            $foto = 'assets' . time() .'.'. $ektensi;
            $filenya->move('assets', $foto);
        } else {
            $foto = 'default.jpg';
        }
        $datafoto = [
            'id_user' => auth()->user()->id,
            'judul_foto' => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi_foto,
            'album_id' => $request->album,
            'url' => $foto
        ];

        Foto::create($datafoto);
        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }
}
