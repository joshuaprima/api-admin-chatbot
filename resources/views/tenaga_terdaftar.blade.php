<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tenaga Kerja belum Terdaftar</title>
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
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="icon" href="{{ asset('favicon.ico') }}"/>
    <script src="{{ asset('js/app.js') }}"></script>
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
                <a href="/" class="nav-link">


                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/sipp" class="nav-link">

                    <p>Akun SIPP</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/akun" class="nav-link ">

                    <p>Daftar Akun Reset</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/kepesertaan" class="nav-link">

                    <p>Kepesertaan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/ketidaksesuaian" class="nav-link">

                    <p>Ketidaksesuaian Data</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/klaim" class="nav-link">

                    <p>Klaim</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/kritik" class="nav-link">

                    <p>Kritik</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/perusahaan" class="nav-link">

                    <p>Perusahaan Belum Terdaftar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/tenaga" class="nav-link active">

                    <p>Tenaga Kerja Belum Terdaftar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/saldo" class="nav-link">

                    <p>Saldo</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/testimoni" class="nav-link">

                    <p>Testimoni</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <p>Logout</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('sweet::alert')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Tenaga kerja Belum Terdaftar</h1>
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
            <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Tenaga Kerja Belum Terdaftar</h3>
              </div>
            </div>
          </div>
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="card-body table-responsive p-0">
                          <table id="example1" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                  <th>Telepon</th>
                                  <th>Jumlah Tenaga Kerja</th>
                                  <th>Status</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($tenaga as $data)
                                  <tr>
                                      <td>{{ $data->nama }}</td>
                                      <td>{{ $data->alamat }}</td>
                                      <td>{{ $data->telepon }}</td>
                                      <td>{{ $data->jumlahTk }}</td>
                                      @if($data->status == 0)
                                          <td>Belum Terverifikasi</td>
                                          <td>
                                              <a href="#" class="btn btn-primary verify" data-id="{{$data->tenagakerjaID}}">Verifikasi</a>
                                              <a href="#" class="btn btn-danger delete" data-id="{{$data->tenagakerjaID}}">Hapus</a>
                                          </td>
                                      @elseif($data->status == 1)
                                          <td>Terverifikasi</td>
                                          <td>
                                              <a href="#" class="btn btn-success" disabled>Terverifikasi</a>
                                              <a href="#" class="btn btn-danger delete" data-id="{{$data->tenagakerjaID}}">Hapus</a>
                                          </td>
                                      @endif
                                  </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
            <!-- /.card -->
          </div>
        </div>
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
    <strong>Copyright <a href="https://www.bpjsketenagakerjaan.go.id/">BPJS-Ketenagakerjaan.go.id</a>.</strong>
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
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    $(document).on('click','.verify',function(){
        var id=$(this).attr('data-id');
        $('#app_id').val(id);
        $('#verifyModal').modal('show');
    });
</script>
<script>
    $(document).on('click','.delete',function(){
        var id=$(this).attr('data-id');
        $('#del_id').val(id);
        $('#deleteModal').modal('show');
    });
</script>
<!--Modal-->
<div id="verifyModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <form action="{{url('/tenaga/verify')}}" method="POST" class="remove-record-model">
                {{ method_field('post') }}
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title text-center" id="custom-width-modalLabel">Verifikasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Tekan tombol verifikasi untuk memverifikasi data.</p>
                    <input type="hidden" name="verify_id" id="app_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success waves-effect">Verifikasi</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--Modal-->

<!--Delete Modal-->
<div id="deleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <form action="{{url('/tenaga/delete')}}" method="POST" class="remove-record-model">
                {{ method_field('post') }}
                {{ csrf_field() }}

                <div class="modal-header">
                    <h4 class="modal-title text-center" id="custom-width-modalLabel">Hapus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                    <input type="hidden" name="delete_id" id="del_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success waves-effect">Yakin</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--Delete Modal-->
</body>
</html>
