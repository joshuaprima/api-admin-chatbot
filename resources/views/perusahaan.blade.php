<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Perusahaan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    
  </nav>
  <!-- Navbar -->
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      
      <span class="brand-text font-weight-light"><center>ADMIN CHATBOT </center></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         


          <li class="nav-item has-treeview">
            
            <li class="nav-item has-treeview">
              <li class="nav-item">
                <a href="/sipp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akun SIPP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/akun" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reset Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kepesertaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kepesertaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/ketidaksesuaian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ketidaksesuaian Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/klaim" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Klaim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kritik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kritik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/perusahaan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perusahaan Blm Terdaftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tenaga" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tng Kerja Blm Terdaftar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/saldo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Saldo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/testimoni" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimoni</p>
                </a>
              </li>

            
    
          
          





        </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Perusahaan</h1>
          </div><!-- /.col -->
        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <!-- Main row -->
        <form action="/add_driver">
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of all Company</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Alamat</th>
                      <th>BLTH Aktif</th>
                      <th>BLTH Nonaktif</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>Jumlah Tenaga Kerja Terakhir</th>
                      <th>Kode NPP</th>
                      <th>Nama NPP</th>
                      <th>No HP</th>
                      <th>No NPP</th>
                      <th>Status NPP</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($perusahaandaftar as $data)
                    <tr>
                      <td>{{ $data->alamat }}</td>
                      <td>{{ $data->blth_aktif }}</td>
                      <td>{{ $data->blth_nonaktif }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->jumlah_tk_terakhir }}</td>
                      <td>{{ $data->kode_npp }}</td>
                      <td>{{ $data->nama_npp }}</td>
                      <td>{{ $data->no_hp }}</td>
                      <td>{{ $data->no_npp }}</td>
                      <td>{{ $data->no_telp }}</td>
                      <td>{{ $data->status_npp }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
                </form>
        <div class="row">
          <!-- Left col -->
          
          <section class="content">
            <!-- Custom tabs (Charts with tabs)-->

            <!-- /.card -->

            <!-- DIRECT CHAT -->

            <!--/.direct-chat -->

            <!-- TO DO List -->
            
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <br>
        <div class="form-group">
        <!-- <input type="submit" class="btn btn-success" value="Add Driver"> -->
          </div>
          </form>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->

            <!-- /.card -->

            <!-- solid sales graph -->
     
            <!-- /.card -->

            <!-- Calendar -->

            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright <a href="https://bpjs-kesehatan.go.id/">BPJS-Kesehatan.go.id</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>BPJS</b> Badan Penyelenggara Jaminan Sosial
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
