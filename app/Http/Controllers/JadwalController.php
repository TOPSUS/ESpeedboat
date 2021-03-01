<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    public function listjadwal()
    {
        $jadwal = Jadwal::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Jadwal',
            'data' => $jadwal
        ],200);
       
    }
    public function show($id)
    {
        $jadwal = Jadwal::whereId($id)->first();

        if ($jadwal){
            return response()->json([
                'success' => true,
                'message' => 'Detail Jadwal',
                'data' => $jadwal
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Jadwal tidak ditemukan',
                'data' => ''
            ],401);
        }
    }
	public function index()
	{

    $dataJadwal = \App\Jadwal::all();
    return view('jadwalmaster',compact('dataJadwal'));
	
	}

	public function createJadwal()
	{
		return view('admin.formJadwal');
	}

    public function addJadwal(Request $request)
    {
        \App\Jadwal::create([
            'asal'=>$request->asal,
            'waktu_berangkat'=>$request->waktu_berangkat,
            'tujuan'=>$request->tujuan,
            'waktu_sampai'=>$request->waktu_sampai,
            'id_speedboat'=>$request->id_speedboat,
        ]);
        return redirect('/admin/jadwalmaster');
    }
}
