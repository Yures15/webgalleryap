<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'foto',
        'id_user',
    ];

    protected $table = 'albums';

    //nilai balik ke tabel foto
    public function fotos(){
        return $this->hasMany(Foto::class, 'id_foto', 'id');
    }
}
