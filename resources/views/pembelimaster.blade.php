@extends('adminlayout.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Data Pembeli</h1>
        </div>
        <hr style="margin-top: 20px" class="sidebar-divider my-0">
          <!-- DataTales Example -->
          <!-- Copy drisini -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Pembeli</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <a class= "btn btn-success text-white" href="{{route('createPembeli')}}"><i class="fas fa-plus"></i> Tambah Data Pembeli</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Tiket</th>
                      <th>Id Jadwal</th>
                      <th>Id Speed Boat</th>
                      <th>Harga</th>
                      <th>Total</th>
                      <th>Id User</th>
                      <th>Status</th>
                      <th>Bukti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($dataPembeli as $pembeli)
                    <tr>
                      <td>{{$pembeli->kode_tiket}}</td>
                      <td>{{$pembeli->jadwal->waktu_berangkat}} - {{$pembeli->jadwal->waktu_sampai}}</td>
                      <td>{{$pembeli->Speedboat->nama_speedboat}}</td>
                      <td>{{$pembeli->harga}}</td>
                      <td>{{$pembeli->total}}</td>
                      <td>{{$pembeli->user->nama}}</td>
                      <td>{{$pembeli->status}}</td>
                      <td>{{$pembeli->bukti}}</td>                      
                      <td><a style="margin-right:7px" class="btn btn-info btn-sm" ><i class="fas fa-pencil-alt"></i></a><a class="btn btn-danger btn-sm" href="/admin/delete" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fas fa-trash"></i></a></td>
                    </tr>
                  
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- smpe sini -->
        
        <!-- Content Row -->
        <div class="row">
        <form method="POST" enctype="multipart/form-data" action="/admin/profile">
        
        </form>
        </div>

        <!-- Content Row -->

        <div class="row">
          
        </div>

        <!-- Content Row -->
        <div class="row">

          <!-- Content Column -->
          <div class="col-lg-6 mb-4">

            <!-- Color System -->
            <div class="row">
              <div class="card mb-4">
                <div class="card-header">
                  Default Card Example
                </div>
                <div class="card-body">
                  This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example.
                </div>
              </div>
          </div>

          </div>

          <div class="col-lg-6 mb-4">

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection