<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listrik extends Model
{
    use HasFactory;

    protected $table = 'listrik';

    protected $fillable =[
        'id_user',
        'id_gedung',
        'nominal_pembelian',
        'jenis_pembayaran'
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

    // public function transaksi()
    // {
    //     return $this->belongsTo(transaksi::class, 'id_gedung');
    // }
}
