<?php

include 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <title>CRUD DATA PENDUDUK</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Agita Setya Hanifah</a>
          </div>
        </div>

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
        < class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Menu
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="tampil.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tampil Data</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="input.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tambah Data</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          </class>
          </class>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><b>Data Penduduk</b></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Advanced Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Data Penduduk</h3>
                </div>
                <div class="card-body">

                  <div class="card-header">
                    <h3 class="card-title">Tabel Data Penduduk</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Status Perkawinan</th>
                          <th>Pekerjaan</th>
                          <th>Kewarganegaraan</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Golongan Darah</th>
                          <th>Tool</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
$no = 1;
foreach ($db->tampil_data() as $d) {
?>
                        <tr>
                          <td>
                            <?php echo $no++; ?>
                          </td>
                          <td>
                            <?php echo $d['nik']; ?>
                          </td>
                          <td>
                            <?php echo $d['nama']; ?>
                          </td>
                          <td>
                            <?php echo $d['jenis']; ?>
                          </td>
                          <td>
                            <?php echo $d['alamat']; ?>
                          </td>
                          <td>
                            <?php echo $d['status']; ?>
                          </td>
                          <td>
                            <?php echo $d['pekerjaan']; ?>
                          </td>
                          <td>
                            <?php echo $d['kewarganegaraan']; ?>
                          </td>
                          <td>
                            <?php echo $d['tempat']; ?>
                          </td>
                          <td>
                            <?php echo $d['tgl']; ?>
                          </td>
                          <td>
                            <?php echo $d['golDarah']; ?>
                          </td>
                          <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>&aksi=edit">EDIT | </a>
                            <a href="proses.php?id=<?php echo $d['id']; ?>&aksi=hapus">HAPUS</a>
                          </td>
                        </tr>
                        <?php
}?>
                      </tbody>
                    </table>

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
                  <!-- AdminLTE for demo purposes -->
                  <script src="dist/js/demo.js"></script>
                  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                  <script src="dist/js/pages/dashboard.js"></script>


</body>

</html>