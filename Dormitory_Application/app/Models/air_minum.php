<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class air_minum extends Model
{
    use HasFactory;

    protected $table = 'air_minum';

    protected $fillable =[
        'id_user',
        'id_gedung',
        'jumlah_galon',
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
}
