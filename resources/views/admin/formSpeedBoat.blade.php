@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Speed Boat</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('speedboatmaster-add')}}">
            @csrf
            <div class="row card-header">
                <div class="col">
                    <label for="nik" class="font-weight-bold text-dark">Nama SpeedBoat</label>
                    <input type="text" class="form-control" id="nama_speedboat" placeholder="Masukan Nama Speed Boat" name="nama_speedboat">
                </div>
                <div class="col">
                    <label for="nama" class="font-weight-bold text-dark">Kapasitas</label>
                    <input type="number" class="form-control" id="kapasitas" placeholder="Masukan Jumlah Kapasitas" name="kapasitas">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="alamat" class="font-weight-bold text-dark">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10" placeholder="Deskripsi"></textarea>
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection