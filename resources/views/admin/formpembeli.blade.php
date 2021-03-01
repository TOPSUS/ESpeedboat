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
                    <input type="text" class="form-control" id="id_jadwal" placeholder="Masukan Jadwal" name="id_jadwal">
                </div>
                <div class="col">
                    <label for="id_speedboat" class="font-weight-bold text-dark">Speed Boat</label>
                    <input type="text" class="form-control" id="id_speedboat" placeholder="Masukan Speedboat" name="id_speedboat">
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
                <input type="text" class="form-control" id="id_user"  placeholder="Masukan Nama Pembeli" name="id_user">
            </div>

            <div class="form-group card-header ">
                <label for="bukti" class="font-weight-bold text-dark">Bukti</label>
                <input type="file" class="form-control" id="bukti"  placeholder="Masukan Nama Pembeli" name="bukti">
            </div>

            <div class="form-group card-header">
                <label for="InputName" class="font-weight-bold text-dark">Status</label>
                    <br><input type="radio" name="status" value="Pending"> Pending &nbsp &nbsp
                    <input type="radio" name="status" value="Terkonfirmasi"> Terkonfirmasi &nbsp &nbsp
                    <input type="radio" name="status" value="Batal"> Batal &nbsp &nbsp
                    <input type="radio" name="status" value="Selesai"> Selesai
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection