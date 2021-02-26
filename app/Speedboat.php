<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Speedboat;

class Speedboat extends Model
{
    protected $guarded = [];
    protected $table = 'tb_speedboat';

    public function jadwal(){
        return $this->hasMany('App\Jadwal');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

}
