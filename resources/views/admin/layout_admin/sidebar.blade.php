<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="{{asset('AdminLTE/')}}/dist/img/AdminLTELogo.png"
         alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminLTE/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Menu Utama</li>
                <li class="nav-item has-treeview">
                  <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="/skema" class="nav-link">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>
                       Skema Sertifikat
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="/unitkompetensi" class="nav-link">
                    <i class="nav-icon fa-solid fa-book"></i>
                    <p>
                       Unit Kompetensi
                    </p>
                  </a>
                </li>
                {{-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                      Unit Uji Kompetensi
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <p>Unit Kompetensi 1</p>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <p>Unit Kompetensi 2</p>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                <li class="nav-item has-treeview">
                  <a href="/asesor" class="nav-link">
                    <i class="nav-icon fa-solid fa-users"></i>
                    <p>
                       Asesor
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="/skema" class="nav-link">
                    <i class="nav-icon fa-solid fa-users"></i>
                    <p>
                       Asesi
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="/skema" class="nav-link">
                    <i class="nav-icon fa-regular fa-calendar"></i>
                    <p>
                       Jadwal Asesmen
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-file"></i>
                    <p>
                      Laporan
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="/sertifikat" class="nav-link">
                    <i class="nav-icon fa-solid fa-list"></i>
                    <p>
                      Sertifikat
                    </p>
                  </a>
                </li>
              </ul>
            </nav>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>