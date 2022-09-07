<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('template')}}" class="nav-link">Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         Silahkan Login
        <img src="{{url('public')}}/dist/img/user.jpg" alt="" style="height: 30px; width: 30px;" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
             <i class="fa fa-user"></i> profile
          </a>
          <a href="{{url('logout')}}" class="dropdown-item">
             <i class="fa fa-cog"></i> setting
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('login')}}" class="dropdown-item">
             <i class="fa fa-sign-out"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
         </div>
      </li>
    </ul>
  </nav>