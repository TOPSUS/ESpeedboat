<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a style="height:50px !important;" class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
          <div class="sidebar-brand-icon">
            <img style="height: 37px;" src="{{asset('assets/admin/img/logo.png')}}">
          </div>
          <div style="font-size: 20px" class="sidebar-brand-text mx-3">SIM Tiketing </div>
        </a>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <div class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
          <div class="sidebar-brand-icon">
            <img class="border" style="height:60px;width:50px;" src="{{asset('assets/admin/img/profile.jpg')}}">
          </div>
          <div style="font-size: 10px !important;margin-left:10px;" class="sidebar-brand-text my-3">
            Super Admin
          </div>
        </div>
        <!-- Divider -->
        <hr style="margin-top: 20px" class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile Admin</span></a>
        </li>
  
        <!-- Divider -->
        <!--<hr class="sidebar-divider">-->
  
        <!-- Heading -->
        <!--<div class="sidebar-heading">
          Interface
        </div>-->
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Master Data</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Daftar Tabel:</h6>
              <a class="collapse-item" href="{{ route('jadwalmaster') }}">Jadwal</a>
              <a class="collapse-item" href="{{ route('pembelimaster') }}">Pembelian</a>
              <a class="collapse-item" href="{{ route('speedboatmaster') }}">Speed Boat</a>
              <a class="collapse-item" href="{{ route('usermaster') }}">User</a>
            </div>
          </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <!--<div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>-->
  
      </ul>
      <!-- End of Sidebar -->