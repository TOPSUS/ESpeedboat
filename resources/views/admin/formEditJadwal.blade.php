@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Jadwal</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('updateJadwal')}}">
            @csrf
            <input type="hidden" name="id" value="{{$dataUpdate->id}}">
            <div class="row card-header">
                <div class="col">
                    <label for="asal" class="font-weight-bold text-dark">Asal</label>
                    <input type="text" class="form-control" id="asal" placeholder="Masukan Asal Speedboat" name="asal" value="{{$dataUpdate->asal}}">
                </div>
                <div class="col">
                    <label for="tujuan" class="font-weight-bold text-dark">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="Masukan Tujuan Speedboat" name="tujuan" value="{{$dataUpdate->tujuan}}">
                </div>
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="asal" class="font-weight-bold text-dark">Waktu Berangkat</label>
                    <input type="datetime-local" step="1" class="form-control" id="asal" placeholder="Masukan Asal Speedboat" name="waktu_berangkat" value="{{$dataUpdate->waktu_berangkat}}">
                </div>
                <div class="col">
                    <label for="waktu_sampai" class="font-weight-bold text-dark">Waktu Sampai</label>
                    <input type="datetime-local" step="1" class="form-control" id="tujuan" placeholder="Masukan Tujuan Speedboat" name="waktu_sampai" value="{{$dataUpdate->waktu_sampai}}">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="alamat" class="font-weight-bold text-dark">Speed Boat</label>
                <select name="id_speedboat" class="custom-select" required>
                    <option value="{{$dataUpdate->jadwaltospeedboat->id}}">{{$dataUpdate->jadwaltospeedboat->nama_speedboat}}</option>
                    @foreach($speedboat as $sp)
                        <option value="{{$sp->id}}">{{$sp->nama_speedboat}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection