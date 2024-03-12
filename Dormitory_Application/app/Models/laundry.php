<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundry extends Model
{
    use HasFactory;

    protected $table = 'laundry';

    protected $fillable =[
        'id_user',
        'id_gedung',
        // 'id_transaksi',
        'atur_jadwal',
        'jenis_pembayaran',
        'jumlah_per_kg'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function gedung()
    {
        return $this->belongsTo(gedung::class, 'id_gedung');
    }

    // public function transaksi()
    // {
    //     return $this->belongsTo(transaksi::class, 'id_gedung');
    // }
}
