<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
  <style>
    .card{
        border: none;
    }
    .nav-link{
        color: white;
    }
    .nav-link:hover{
        color: gray;
    }
  </style>  
  <title><?php echo $judul ?></title>
</head>
<body>
 <!-- Header -->
  <nav class="navbar fixed-top navbar-expand-lg" style="background-color: black;">
    <div>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/logo.png')?>" class="rounded float-left" style="margin-left: 50px;"height="80" width="80"></a>
    </div>
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <strong>
        <ul class="navbar-nav" style="font-size:0.9em;">
          <li class="nav-item" >
            <a class="nav-link" href="<?= base_url(); ?>">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Jadwal">JADWAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Pertandingan">PERTANDINGAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Klasemen">KLASEMEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Tim">TIM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Pertandingan/inputPertandingan">input pertandingan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Comments">Diskusi</a>
          </li>
        </ul>
      </strong>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>Daftar/input">Daftar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>Login/inputlogin">Login</a>
            </li>
        </ul>
    </div>
    </div>
  </nav>
 <!-- End Of Header -->