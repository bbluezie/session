<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url("index3.html") }}" class="brand-link">
      <img src="{{ asset("/admin/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BlueSpa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset("/admin/dist/img/Gavin.jpg") }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url("#") }}" class="d-block">@if(Auth::check())
            <span class="hidden-xs">{{ Auth::user()->name}}</span>
          @endif</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="{{ url("#") }}" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Menu Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url("./index.html") }}" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url("./index2.html") }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url("./index3.html") }}" class="nav-link">
                  <i class="fas fa-box-open nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item menu-close">
                <a href="{{ url("#") }}" class="nav-link active">
                  <i class="nav-icon fas fa-box"></i>
                  <p>
                    Pesanan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("./index.html") }}" class="nav-link">
                      <i class="fas fa-sign-in-alt nav-icon"></i>
                      <p>Pesanan Diterima</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url("./index2.html") }}" class="nav-link">
                      <i class="fas fa-sign-out-alt nav-icon"></i>
                      <p>Pesanan Dibatalkan</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="{{ url("#") }}" class="nav-link active">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url("./index.html") }}" class="nav-link">
                  <i class="fas fa-shopping-basket nav-icon"></i>
                  <p>Keranjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url("./index2.html") }}" class="nav-link">
                  <i class="fas fa-money-check-alt nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="{{ url("#") }}" class="nav-link active">
              <i class="far fa-address-book nav-icon"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url("./index.html") }}" class="nav-link">
                  <i class="far fa-calendar-alt nav-icon"></i>
                  <p>Tahunan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url("./index2.html") }}" class="nav-link">
                  <i class="	fas fa-moon nav-icon"></i>
                  <p>Bulanan</p>
                </a>
              </li>
            </ul>
          </li>
          
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>