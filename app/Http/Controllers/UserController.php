<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->get();
        return response([
            'success' => true,
            'message' => 'List User',
            'data' => $users
        ],200);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::whereId($id)->first();

        if ($users){
            return response()->json([
                'success' => true,
                'message' => 'Detail User',
                'data' => $users
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'User tidak ditemukan',
                'data' => ''
            ],401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
public function homeuser()
	{

    $dataUser = \App\User::all();
    return view('usermaster',compact('dataUser'));
	
	}

	public function createUser()
	{
		return view('admin.formUser');
	}

	public function addUser(Request $request)
	{
		\App\User::create([
			'nik'=>$request->nik,
			'nama'=>$request->nama,
			'alamat'=>$request->alamat,
			'jeniskelamin'=>$request->jeniskelamin,
			'nohp'=>$request->nohp,
			'email'=>$request->email,
			'password'=>Hash::make($request->password),
			'role'=>$request->role,
		]);
		return redirect('/admin/usermaster');
	}
}
