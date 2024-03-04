<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'url',
        'album_id',
        'id_user',
    ];

    protected $table = 'fotos';

    //Relasi nilai balik ke tabel user
    public function user(){
        return $this->belongsTo(User::class, 'id_user','id');
    }

    //Relasi ke tabel likes
    public function likes(){
        return $this->hasMany(Like::class, 'id_foto','id');
    }

    //nilai balik ke tabel album
    public function albums(){
        return $this->belongsTo(Album::class, 'album_id','id');
    }

    public function komentars(){
        return $this->hasMany(Komentar::class, 'id_foto','id');
    }
}
