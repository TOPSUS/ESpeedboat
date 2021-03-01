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
        $Speedboat=\App\Speedboat::all();
        $Jadwal=\App\Jadwal::all();
        $User=\App\User::all();
		return view('admin.formPembeli', compact('Speedboat','Jadwal','User'));
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
            'bukti'=>$request->bukti,
            'status'=>'Pending',
        ]);
        return redirect('/admin/pembelimaster');
    }
    
    public function editPembeli($id){
        $Speedboat=\App\Speedboat::all();
        $Jadwal=\App\Jadwal::all();
        $User=\App\User::all();
        $dataUpdate=\App\Pembeli::with('Jadwal','Speedboat','User')->find($id);
            return view('admin.formEditPembeli', compact('dataUpdate','Speedboat','Jadwal','User'));
    }

    public function updatePembeli(Request $request){
        $dataPost=\App\Pembeli::find($request->id);

        $dataPost->kode_tiket=$request->kode_tiket;
        $dataPost->id_jadwal=$request->id_jadwal;
        $dataPost->id_speedboat=$request->id_speedboat;
        $dataPost->harga=$request->harga;
        $dataPost->total=$request->total;
        $dataPost->id_user=$request->id_user;
        $dataPost->bukti=$request->bukti;
        $dataPost->status=$request->status;
        $dataPost->save();

        return redirect('/admin/jadwalmaster');
    }

    public function deletePembeli($id){
        $deletePembeli=\App\Pembeli::find($id);
        $deletePembeli->delete();

        return redirect('/admin/pembelimaster');
    }

    
}
