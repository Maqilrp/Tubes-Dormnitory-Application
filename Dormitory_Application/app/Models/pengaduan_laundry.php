<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan_laundry extends Model
{
    use HasFactory;

    protected $table = 'pengaduan_laundry';

    protected $fillable =[
        'id_user',
        'id_gedung',
        'permasalahan'
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
