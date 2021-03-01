<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'tb_pembelian';
    protected $fillable = ['id','kode_tiket','id_jadwal','id_speedboat','harga','total','id_user','status','bukti'];

    public function Speedboat()
    {
        return $this->belongsTo('App\Speedboat','id_speedboat','id');
    }

     public function jadwal()
    {
        return $this->belongsTo('App\Jadwal','id_jadwal','id');
    }

    public function user()
    {
        return $this->belongsTo('App\user','id_user','id');
    }
}
