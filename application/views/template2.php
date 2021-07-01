<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php $infoweb = $this->db->get_where('info', array('id_info' => '1'))->row();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Halaman Pendaftaran</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>templateadmin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>templateadmin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="<?php echo base_url() ?>templateadmin/plugins/jquery/jquery.min.js"></script>
  <style type="text/css">
    .nav-link{
      color: white !important;
    }
    .brand-text{
      color: white !important;
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background: #000080;">
    <div class="container">
      <a href="<?php echo base_url() ?>front" class="navbar-brand">
        <img src="<?php echo base_url() ?>templateadmin/dist/img/alam.png" alt="Alam Logo" class="brand-image img-circle elevation-3"
             style="opacity: .9;margin-top: 1px;">
        <span class="brand-text font-weight-light float-right"><?= $infoweb->nama_web?> Pendakian</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav" style="position: absolute;left: 690px;">
          <li class="nav-item">
            <a href="<?php echo base_url() ?>front" class="nav-link <?= (current_url()==base_url()."front") ? 'active' : '' ;?>">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>front/info" class="nav-link <?= (current_url()==base_url()."front/info") ? 'active' : '' ;?>">Info</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>front/tentang" class="nav-link <?= (current_url()==base_url()."front/tentang") ? 'active' : '' ;?>">Tutorial</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>login" class="nav-link">Admin</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form action="<?php echo base_url() ?>front/cekstatus" method="post" class="form-inline ml-0 ml-md-3 "  style="position: absolute;right: 100px;">
          <div class="input-group input-group-sm float-right">
            <input class="form-control form-control-navbar" name="search" id="search" type="search" placeholder="Cek Kode Booking" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?= @$title?></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
                echo $contents;
            ?>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pendaftaran Pendakian Gunung Buthak-Panderman Jawa Timur</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>templateadmin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>templateadmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>templateadmin/dist/js/adminlte.min.js"></script>
</body>
</html>
