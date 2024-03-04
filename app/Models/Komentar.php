<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'isi_komentar',
        'id_user',
        'id_foto',
    ];

    protected $table = 'komentars';

    //nilai balik ke user
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    //nilai balik ke foto
    public function fotos(){
        return $this->belongsTo(Foto::class, 'id_foto', 'id');
    }
}
