<?php
include'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico"/>

    <title>Sistem Pakar Metode Certainty Factor</title>
    <link href="assets/css/general.css" rel="stylesheet"/>
	<link href="assets/font/css/open-iconic-bootstrap.css" rel="stylesheet"/>  
	<link href="new/css/bootstrap.min.css" rel="stylesheet">	
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand">Sistem Pakar Metode Certainty Factor</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-view" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mobile-view">
          <ul class="nav navbar-nav ml-auto">            
            <?php if($_SESSION[login]):?>
            <li class="nav-item"><a class="nav-link" href="?m=diagnosa"><span class="oi oi-eye"></span> Data Diagnosa Depresi</a></li>
            <li class="nav-item"><a class="nav-link" href="?m=gejala"><span class="oi oi-fire"></span> Data Gejala</a></li>
            <li class="nav-item"><a class="nav-link" href="?m=relasi"><span class="oi oi-loop-square"></span>Data Relasi</a></li>
            <li class="nav-item"><a class="nav-link" href="?m=password"><span class="oi oi-key"></span> Password</a></li>
            <li class="nav-item"><a class="nav-link" href="aksi.php?act=logout"><span class="oi oi-lock-locked"></span> Logout</a></li>
            <?php else:?>
            <li class="nav-item"><a class="nav-link" href="?m=konsultasi"><span class="oi oi-box"></span> Diagnosa </a></li> 
            <li class="nav-item"><a class="nav-link" href="?m=login"><span class="oi oi-monitor"></span> Login</a></li>
            <?php endif?>               
          </ul>          
        </div>
      </div>
    </nav>
    <div class="container">
    <?php
        if(file_exists($mod.'.php'))
            if(!$_SESSION[login] && in_array($mod, array('diagnosa', 'gejala', 'relasi', 'password')))
                redirect_js('index.php?m=login');
            else
                include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div></br></br>
    <footer class="footer bg-primary">
      <div class="container">
        <center><p style="color:white;">Copyright &copy; <?=date('Y')?> Tugas Akhir Ryan</p>
      </div>
    </footer>
	<script src="new/js/bootstrap.min.js"></script>
	<script src="new/js/jquery.min.js"></script> 
 </body>
</html>