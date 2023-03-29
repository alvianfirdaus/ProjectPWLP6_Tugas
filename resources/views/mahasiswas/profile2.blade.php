<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Profil 2</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" href="{{route('logout')}}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                      {{_('Logout')}}
        </a>
        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
          @csrf 
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @extends('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                      src="../../dist/img/egaa.png" width="20"
                      alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Muhammad Ega Rama Fernanda</h3>

                <p class="text-muted text-center">System Analist</p>

                <a href="https://www.instagram.com/muhammadegaram/" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Biodata Mahasiswa</strong>

                <p class="text-muted">
                  <table border ="2" width="100%">
                  @foreach($dataprofil as $pr)
                  <tr>
                    <th width="300px">Nama Lengkap</th><th>{{$pr -> nama_lengkap}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Nama Panggilan</th><th>{{$pr -> nama}}</th>
                  </tr>
                  <tr>
                    <th width="300px">NIM</th><th>{{$pr -> nim}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Absen</th><th>{{$pr -> absen}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Kelas</th><th>{{$pr -> kelas}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Prodi</th><th>{{$pr -> prodi}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Jurusan</th><th>{{$pr -> jurusan}}</th>
                  </tr>
                    
                  @endforeach
              </table>
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted"></p>
                <table border ="2" width="100%">
                  @foreach($dataprofil as $pr)
                  <tr>
                    <th width="300px">Alamat Asal </th><th>{{$pr -> alamat}}</th>
                  </tr>
                  <tr>
                    <th width="300px">Alamat di Malang </th><th>{{$pr -> alamat_mlg}}</th>
                  </tr>
                  @endforeach
              </table>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                <p class="text-muted">
                <table border ="2" width="100%">
                  @foreach($dataprofil as $pr)
                  <tr>
                    <th width="300px">skil yang dimiliki </th><th>{{$pr -> skil}}</th>
                  </tr>
                  @endforeach
              </table>
                  <span class="tag tag-danger"></span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Social media</strong>
                <table border ="2" width="100%">
                  @foreach($dataprofil as $pr)
                  <tr>
                    <th width="300px">Instagraam </th><th>{{$pr -> sosmed}}</th>
                  </tr>
                  @endforeach
              </table>

                <p class="text-muted"></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  <!-- /.content-wrapper -->

  @extends('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>