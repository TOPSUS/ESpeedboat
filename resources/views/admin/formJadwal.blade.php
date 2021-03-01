@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Jadwal</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('jadwalmaster-add')}}">
            @csrf
            <div class="row card-header">
                <div class="col">
                    <label for="asal" class="font-weight-bold text-dark">Asal</label>
                    <input type="text" class="form-control" id="asal" placeholder="Masukan Asal Speedboat" name="asal">
                </div>
                <div class="col">
                    <label for="tujuan" class="font-weight-bold text-dark">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="Masukan Tujuan Speedboat" name="tujuan">
                </div>
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="asal" class="font-weight-bold text-dark">Waktu Berangkat</label>
                    <input type="datetime-local" step="1" class="form-control" id="asal" placeholder="Masukan Asal Speedboat" name="waktu_berangkat">
                </div>
                <div class="col">
                    <label for="tujuan" class="font-weight-bold text-dark">Waktu Sampai</label>
                    <input type="datetime-local" step="1" class="form-control" id="tujuan" placeholder="Masukan Tujuan Speedboat" name="waktu_sampai">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="alamat" class="font-weight-bold text-dark">Speed Boat</label>
                <input type="text" class="form-control" id="id_speedboat"  placeholder="Masukan Speedboat" name="id_speedboat">
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection