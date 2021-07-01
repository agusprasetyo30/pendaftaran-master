<?php
    // MENGATUR SESSION SURAT MASUK
    if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
          <?= $this->session->flashdata('message') ?>
        </div>
        <?php
    }
?>

<!-- welcome -->
<div class="col-lg-12">
  <div class="card" style="background: #87CEFA;color: white;">
  <!-- <div class="row"> -->
    <div class="col-lg-12">
        <p class="card-text">
          Selamat datang di Registrasi Online </p>
          <p>Pendakian Gunung Buthak-Panderman 
          Sebelum melakukan registrasi, bagi setiap kelompok yang ingin melakukan pendakian, 
          dipersilahkan untuk mencermati tata cara registrasi dengan seksama. Peraturan dan Larangan 
          merupakan hal yang harus ditaati oleh calon pengunjung
        </p>
      </div>
    </div>
    

<!-- SLIDER -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>filw/pos.jpg" style="width: 50%;" class="d-block w-100" alt="gambar">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>filw/puncak2.jpg" style="width: 50%;" class="d-block w-100" alt="gambar">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>filw/buthak.jpg" style="width: 50%;" class="d-block w-100" alt="gambar">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- <div class="card card-primary card-outline">
  <div class="card-body text-center">
    <p class="card-text">
      <img src="<?php echo base_url() ?>filw/pos.jpg" style="width: 50%;">
    </p>
  </div>
</div>/.card -->
<br>
<div class="col-lg-12">
  <div class="card" style="background: #000080;color: white;">
  <div class="row">
    <div class="col-lg-6">
      <div class="card-body">

        <p class="card-text">
          Sebelum mendaftar diharapkan membaca info yang sudah tertera !
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card-body">
        <a href="<?php echo base_url() ?>front/list" class="btn btn-primary float-right">Daftar</a>
      </div>
    </div>
  </div>
  </div>
</div>