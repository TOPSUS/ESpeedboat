<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Speedboat;
use Illuminate\Database\Eloquent\SoftDeletes;


class Speedboat extends Model
{
	use SoftDeletes;
    protected $guarded = [];
    protected $table = 'tb_speedboat';

    public function jadwal(){
        return $this->hasMany('App\Jadwal');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id_user');
    }

    public function speedboattojadwal()
    {
        return $this->HashMany('App\Jadwal','id_speedboat');
    }

    
}
