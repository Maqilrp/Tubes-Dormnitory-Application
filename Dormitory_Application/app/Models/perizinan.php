<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perizinan extends Model
{
    use HasFactory;

    protected $table = 'perizinan';
    protected $fillable = [
        'id_user',
        'id_gedung',
        'jenis_perizinan',
        'tanggal_waktu',
        'alasan',
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
