@foreach($data1 as $dt1)
<!DOCTYPE html>
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
<head>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> {{$dt1 -> nama}}</h5>
              Halaman ini akan menampilkan pengalaman kuliah dari {{$dt1 -> nama}}
            </div>
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Prestasi yang diukir.
                    <small class="float-right">diperbarui pada 14-Maret-2023</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-10 invoice-col">
                  Berikut adalah riwayat prestasi yang diukir oleh {{$dt1 -> nama}}, selama 2021 - hingga saat ini 
                </div>
                <!-- /.col -->
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Kejuaraan</th>
                      <th>Tanggal Diadakan</th>
                      <th>Deskripsi Juara</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>{{$dt1 -> nama_kejuaraan}}</td>
                      <td>{{$dt1 -> tanggal}}</td>
                      <td>{{$dt1 -> deskripsi}}</td>
                      <td>{{$dt1 -> subtotal}}</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
             
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-2">
                  <p class="lead">Foto Profil</p>
                  <img src="../../dist/img/alpro.jpg" width="159" height="200">
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    
                </div>
                <!-- /.col -->
                <div class="col-9">
                  <p class="lead">Detail Pengalaman Kuliah</p>
                  {{$dt1 -> cerita}}
                  </p>
                </div>
                @endforeach
                
                <!-- /.col -->
                </div>
                
              
            </div>
            
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>