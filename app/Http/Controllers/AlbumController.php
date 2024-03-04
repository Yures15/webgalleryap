<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function storeAlbum(Request $request){
        $request->validate([
            'nama_album' => 'required',
            'deskripsi' => 'required',
        ]);

        $fotoFile = $request->file('foto');
        $fotoExtention = $fotoFile->getClientOriginalExtension();
        $fotoName = date('dmyhis').'.'.$fotoExtention;
        $fotoFile->move(public_path('/assets'), $fotoName);

        $dataAlbum = [
            'nama_album' => $request->nama_album,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoName,
            'id_user' => Auth::user()->id,
        ];

        Album::create($dataAlbum);
        return redirect()->back()->with('success', 'Album Berhasil Di Buat');
    }


    public function updateAlbum(Request $request, $id){
        $request->validate([
            'nama_album' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $album = Album::find($id);
    
        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $fotoExtention = $fotoFile->getClientOriginalExtension();
            $fotoName = date('dmyhis').'.'.$fotoExtention;
            $fotoFile->move(public_path('/assets'), $fotoName);
            $album->foto = $fotoName;
        }
    
        $album->nama_album = $request->nama_album;
        $album->deskripsi = $request->deskripsi;
        $album->save();
    
        return redirect()->back()->with('success', 'Album Berhasil Diupdate');
    }
    
    public function detail($id){
        $user = auth()->user();
        $fotos = Foto::where('album_id', $id)->where('id_user', Auth::user()->id)->get();
        $album = Album::where('id', $id)->first();

        return view('page.detailalbum', compact('fotos', 'album', 'user'));
    }

    public function deletalbum($id){
        $data = Album::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Album Berhasil Di Hapus');
    }
}
