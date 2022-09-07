@php
  function checkRouteActive($route){
    if (Route::current()->uri == $route) return 'active';
  }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/logooo.png"  class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">Resseler hijab Kori</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('public')}}/dist/img/user2-160*160">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Produk
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('kategori')}}" class="nav-link {{checkRouteActive('kategori')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Kategori
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('user')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  User
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Master Data
                <i class="right fas fa-angle-left"></i>
               </p>
              </a>
              <ul class="nav nav-treeview">
               <li class="nav-item">
                <a herf="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a herf="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>