@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('updateUser')}}">
            @csrf
            <input type="hidden" name="id" value="{{$dataUpdate->id}}">
            <div class="row card-header">
                <div class="col">
                    <label for="nik" class="font-weight-bold text-dark">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" value="{{$dataUpdate->nik}}">
                </div>
                <div class="col">
                    <label for="nama" class="font-weight-bold text-dark">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{$dataUpdate->nama}}">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="alamat" class="font-weight-bold text-dark">Alamat</label>
                <input type="text" class="form-control" id="alamat"  placeholder="Masukan Alamat" name="alamat" value="{{$dataUpdate->alamat}}">
            </div>

            <div class="form-group card-header">
                <label for="InputName" class="font-weight-bold text-dark">Jenis Kelamin</label>
                    <br>@if($dataUpdate->jeniskelamin == 'Laki-Laki')
                    <input type="radio" name="jeniskelamin" value="Laki-laki" checked> Laki-laki &nbsp &nbsp
                    <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan<br>
                    @else
                    <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki &nbsp &nbsp
                    <input type="radio" name="jeniskelamin" value="Perempuan" checked> Perempuan<br>
                    @endif
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="nohp" class="font-weight-bold text-dark">No Hp</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Masukan No Telp" name="nohp" value="{{$dataUpdate->nohp}}">
                </div>
                <div class="col">
                    <label for="email" class="font-weight-bold text-dark">E-Mail</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan E-Mail" name="email" value="{{$dataUpdate->email}}">
                </div>
            </div>

            <div class="form-group card-header">
                <label for="InputName" class="font-weight-bold text-dark">Role/Jabatan</label>
                    <br>@if($dataUpdate->role == "Customer")
                    <input type="radio" name="role" value="Customer" checked> Customer &nbsp &nbsp
                    <input type="radio" name="role" value="Direktur"> Direktur &nbsp &nbsp
                    <input type="radio" name="role" value="Admin"> Admin &nbsp &nbsp
                    <input type="radio" name="role" value="SAdmin"> Super Admin
                    @elseif($dataUpdate->role == "Direktur")
                    <input type="radio" name="role" value="Customer"> Customer &nbsp &nbsp
                    <input type="radio" name="role" value="Direktur" checked> Direktur &nbsp &nbsp
                    <input type="radio" name="role" value="Admin"> Admin &nbsp &nbsp
                    <input type="radio" name="role" value="SAdmin"> Super Admin
                    @elseif($dataUpdate->role == "Admin")
                    <input type="radio" name="role" value="Customer"> Customer &nbsp &nbsp
                    <input type="radio" name="role" value="Direktur"> Direktur &nbsp &nbsp
                    <input type="radio" name="role" value="Admin" checked> Admin &nbsp &nbsp
                    <input type="radio" name="role" value="SAdmin"> Super Admin
                    @else
                    <input type="radio" name="role" value="Customer"> Customer &nbsp &nbsp
                    <input type="radio" name="role" value="Direktur"> Direktur &nbsp &nbsp
                    <input type="radio" name="role" value="Admin"> Admin &nbsp &nbsp
                    <input type="radio" name="role" value="SAdmin" checked> Super Admin
                    @endif
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection