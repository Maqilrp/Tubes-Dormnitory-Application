<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histori extends Model
{
    use HasFactory;

    protected $table = 'histori';

    protected $primarykey = 'id';

    protected $fillable = [
        'id_user',
        'id_perizinan',
        'id_laundry',
        'id_listrik',
        'id_air_minum',
        'id_paket'
    ];

    function user(){
        return $this->belongsTo(user::class,'id_user');
    }
}
