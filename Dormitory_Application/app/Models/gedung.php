<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    use HasFactory;

    protected $table = 'gedung';

    public $timestamps = false;

    protected $fillable = [
        'no_gedung',
        'no_kamar',
        'Deskripsi',
    ];
    public function perizinan()
    {
        return $this->hasOne(Perizinan::class, 'id_gedung');
    }

    public function laundry()
    {
        return $this->hasOne(laundry::class, 'id_gedung');
    }

    public function pengaduan_laundry()
    {
        return $this->hasOne(pengaduan_laundry::class, 'id_gedung');
    }

    public function air_minum()
    {
        return $this->hasOne(air_minum::class, 'id_gedung');
    }

    public function listrik()
    {
        return $this->hasOne(listrik::class, 'id_gedung');
    }

    public function paket()
    {
        return $this->hasOne(paket::class, 'id_gedung');
    }

    public function penduan_paket()
    {
        return $this->hasOne(pengaduan_paket::class, 'id_gedung');
    }
}
