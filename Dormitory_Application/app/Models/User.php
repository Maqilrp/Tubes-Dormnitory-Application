<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'email',
        'nim',
        'no_telp',
        'foto',
        'password',
        'id_gedung',
    ];



    public $timestamps = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function perizinan()
    {
        return $this->hasMany(Perizinan::class, 'id_user');
    }

    public function laundry()
    {
        return $this->hasMany(laundry::class, 'id_user');
    }

    public function pengaduan_laundry()
    {
        return $this->hasMany(pengaduan_laundry::class, 'id_user');
    }

    public function air_minum()
    {
        return $this->hasMany(air::class, 'id_user');
    }

    public function listrik()
    {
        return $this->hasMany(listrik::class, 'id_user');
    }

    public function paket()
    {
        return $this->hasMany(paket::class, 'id_user');
    }

    public function pengaduan_paket()
    {
        return $this->hasMany(pengaduan_paket::class, 'id_user');
    }


}
