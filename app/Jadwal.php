<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $guarded = [];
    protected $table = 'tb_jadwal';

    public function speedboat()
    {
        return $this->belongsTo('App\Speedboat','id_speedboat','id');
    }
}
