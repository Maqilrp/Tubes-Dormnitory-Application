<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $fillable =[
        'id_user',
        'id_gedung',

        //penerima
        'nama_penerima',
        'foto_bukti',
        'no_telp'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function gedung()
    {
        return $this->belongsTo(gedung::class, 'id_gedung');
    }
}
