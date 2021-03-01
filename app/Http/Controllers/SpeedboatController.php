<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speedboat;

class SpeedboatController extends Controller
{
    public function listspeedboat()
    {
        $speedboats = Speedboat::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Speedboat',
            'data' => $speedboats
        ],200);
       
    }

    public function show($id)
    {
        $speedboats = Speedboat::whereId($id)->first();

        if ($speedboats){
            return response()->json([
                'success' => true,
                'message' => 'Detail Speedboat',
                'data' => $speedboats
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Speedboat tidak ditemukan',
                'data' => ''
            ],401);
        }
    }
public function index()
	{

    $dataSpeedboat = \App\Speedboat::all();
    return view('speedboatmaster',compact('dataSpeedboat'));
	
	}

	public function createSpeedboat()
	{
		return view('admin.formSpeedBoat');
	}

    public function addSpeedboat(Request $request)
    {
        \App\Speedboat::create([
            'nama_speedboat'=>$request->nama_speedboat,
            'kapasitas'=>$request->kapasitas,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect('/admin/speedboatmaster');
    }
}
