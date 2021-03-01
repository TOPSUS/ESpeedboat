<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $table = 'tb_jadwal';

    public function speedboat()
    {
        return $this->belongsTo('App\Speedboat','id_speedboat','id');
    }

    public function jadwaltospeedboat()
    {
        return $this->belongsTo('App\Speedboat','id_speedboat');
    }
}

