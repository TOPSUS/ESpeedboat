<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
	{

    $dataPembeli = \App\Pembeli::all();
    return view('pembelimaster',compact('dataPembeli'));
	
	}

	public function createPembeli()
	{
		return view('admin.formPembeli');
	}

	public function addPembeli(Request $request)
    {
        \App\Pembeli::create([
            'kode_tiket'=>$request->kode_tiket,
            'id_jadwal'=>$request->id_jadwal,
            'id_speedboat'=>$request->id_speedboat,
            'harga'=>$request->harga,
            'total'=>$request->total,
            'id_user'=>$request->id_user,
            'status'=>$request->status,
            'bukti'=>$request->bukti,
        ]);
        return redirect('/admin/pembelimaster');
    }
}
