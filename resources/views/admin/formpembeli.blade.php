@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembelian</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('pembelimaster-add')}}">
            @csrf
            <div class="form-group card-header ">
                <label for="kode_tiket" class="font-weight-bold text-dark">Kode Tiket</label>
                <input type="text" class="form-control" id="kode_tiket"  placeholder="Masukan Kode Tiket" name="kode_tiket">
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="id_jadwal" class="font-weight-bold text-dark">Jadwal</label>
                    <select name="id_jadwal" class="custom-select" required>
                    @foreach($Jadwal as $jd)
                        <option value="{{$jd->id}}">{{$jd->asal}} -> {{$jd->tujuan}} ({{$jd->waktu_berangkat}} - {{$jd->waktu_sampai}})</option>
                    @endforeach
                     </select>
                </div>
                <div class="col">
                    <label for="id_speedboat" class="font-weight-bold text-dark">Nama Speed Boat Speed Boat</label>
                    <select name="id_speedboat" class="custom-select" required>
                    @foreach($Speedboat as $sb)
                        <option value="{{$sb->id}}">{{$sb->nama_speedboat}}</option>
                    @endforeach
                     </select>
                </div>
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="harga" class="font-weight-bold text-dark">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Masukan Harga" name="harga">
                </div>
                <div class="col">
                    <label for="total" class="font-weight-bold text-dark">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Jumlah" name="total">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="id_user" class="font-weight-bold text-dark">Pembeli</label>
                <select name="id_user" class="custom-select" required>
                    @foreach($User as $us)
                        <option value="{{$us->id}}">{{$us->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group card-header ">
                <label for="bukti" class="font-weight-bold text-dark">Bukti</label>
                <input type="file" class="form-control" id="bukti"  placeholder="Masukan Nama Pembeli" name="bukti">
            </div>
            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection