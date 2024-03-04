<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\Trigerlogin;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'alamat',
        'avatar',
        'email',
        'nama_lengkap',
        'jenis_kelamin',
        'bio',
        'no_telepon',
        'tgl_lahir',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relasi Kedalam tabel foto
    public function fotos(){
        return $this->hasMany(Foto::class, 'id_user', 'id');
    }

    public function trigerlogin(){
        return $this->hasMany(Trigerlogin::class, 'id_user', 'id');
    }
}
