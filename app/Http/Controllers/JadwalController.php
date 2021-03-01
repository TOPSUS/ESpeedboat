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
        $speedboat=\App\Speedboat::all();
		return view('admin.formJadwal', compact('speedboat'));
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

    public function editJadwal($id){
        $speedboat=\App\Speedboat::all();
        $dataUpdate=\App\Jadwal::with('jadwaltospeedboat')->find($id);
            return view('admin.formEditJadwal', compact('dataUpdate','speedboat'));
    }

    public function updateJadwal(Request $request){
        $dataPost=\App\Jadwal::find($request->id);

        $dataPost->asal=$request->asal;
        $dataPost->waktu_berangkat=$request->waktu_berangkat;
        $dataPost->tujuan=$request->tujuan;
        $dataPost->waktu_sampai=$request->waktu_sampai;
        $dataPost->id_speedboat=$request->id_speedboat;

        $dataPost->save();

        return redirect('/admin/jadwalmaster');
    }

    public function deleteJadwal($id){
        $deleteJadwal=\App\Jadwal::find($id);
        $deleteJadwal->delete();

        return redirect('/admin/jadwalmaster');
    }
}
