@extends('adminlayout.layout')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pembelian</h6>
    </div>

    <div class="card shadow">
        <form method="POST" enctype="multipart/form-data" action="{{route('pembelimaster-add')}}">
            @csrf
            <input type="hidden" name="id" value="{{$dataUpdate->id}}">
            <div class="form-group card-header ">
                <label for="kode_tiket" class="font-weight-bold text-dark">Kode Tiket</label>
                <input type="text" class="form-control" id="kode_tiket"  placeholder="Masukan Kode Tiket" name="kode_tiket" value="{{$dataUpdate->kode_tiket}}">
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="id_jadwal" class="font-weight-bold text-dark">Jadwal</label>
                    <select name="id_jadwal" class="custom-select" required>
                        <option value="{{$dataUpdate->Jadwal->id}}">{{$dataUpdate->Jadwal->asal}} -> {{$dataUpdate->Jadwal->tujuan}} ({{$dataUpdate->Jadwal->waktu_berangkat}} - {{$dataUpdate->Jadwal->waktu_sampai}})</option>
                    @foreach($Jadwal as $jd)
                        <option value="{{$jd->id}}">{{$jd->asal}} -> {{$jd->tujuan}} ({{$jd->waktu_berangkat}} - {{$jd->waktu_sampai}})</option>
                    @endforeach
                     </select>
                </div>
                <div class="col">
                    <label for="id_speedboat" class="font-weight-bold text-dark">Nama Speed Boat Speed Boat</label>
                    <select name="id_speedboat" class="custom-select" required>
                    <option value="{{$dataUpdate->Speedboat->id}}">{{$dataUpdate->Speedboat->nama_speedboat}}</option>
                    @foreach($Speedboat as $sb)
                        <option value="{{$sb->id}}">{{$sb->nama_speedboat}}</option>
                    @endforeach
                     </select>
                </div>
            </div>
            <div class="row card-header">
                <div class="col">
                    <label for="harga" class="font-weight-bold text-dark">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Masukan Harga" name="harga" value="{{$dataUpdate->harga}}">
                </div>
                <div class="col">
                    <label for="total" class="font-weight-bold text-dark">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Jumlah" name="total" value="{{$dataUpdate->total}}">
                </div>
            </div>

            <div class="form-group card-header ">
                <label for="id_user" class="font-weight-bold text-dark">Pembeli</label>
                <select name="id_user" class="custom-select" required>
                    <option value="{{$dataUpdate->User->id}}">{{$dataUpdate->User->nama}}</option>
                    @foreach($User as $us)
                        <option value="{{$us->id}}">{{$us->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group card-header ">
                <label for="bukti" class="font-weight-bold text-dark">Bukti</label>
                <input type="file" class="form-control" id="bukti"  placeholder="Masukan Nama Pembeli" name="bukti" value="{{$dataUpdate->bukti}}">
            </div>

            <div class="form-group card-header">
                <label for="InputName" class="font-weight-bold text-dark">Status</label>
                <br>@if($dataUpdate->role == "Pending")
                    <input type="radio" name="status" value="Pending" checked> Pending &nbsp &nbsp
                    <input type="radio" name="status" value="Terkonfirmasi"> Terkonfirmasi &nbsp &nbsp
                    <input type="radio" name="status" value="Batal"> Batal &nbsp &nbsp
                    <input type="radio" name="status" value="Selesai"> Selesai
                    @elseif($dataUpdate->role == "Terkonfirmasi")
                    <input type="radio" name="status" value="Pending"> Pending &nbsp &nbsp
                    <input type="radio" name="status" value="Terkonfirmasi" checked> Terkonfirmasi &nbsp &nbsp
                    <input type="radio" name="status" value="Batal"> Batal &nbsp &nbsp
                    <input type="radio" name="status" value="Selesai"> Selesai
                    @elseif($dataUpdate->role == "Batal")
                    <input type="radio" name="status" value="Pending"> Pending &nbsp &nbsp
                    <input type="radio" name="status" value="Terkonfirmasi"> Terkonfirmasi &nbsp &nbsp
                    <input type="radio" name="status" value="Batal" checked> Batal &nbsp &nbsp
                    <input type="radio" name="status" value="Selesai"> Selesai
                    @else
                   <input type="radio" name="status" value="Pending"> Pending &nbsp &nbsp
                    <input type="radio" name="status" value="Terkonfirmasi"> Terkonfirmasi &nbsp &nbsp
                    <input type="radio" name="status" value="Batal"> Batal &nbsp &nbsp
                    <input type="radio" name="status" value="Selesai" checked> Selesai
                    @endif
            </div>

            <div class="form-group card-header">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection