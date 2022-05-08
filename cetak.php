<?php include 'functions.php';?>
<!doctype html>
<html>
<head>
<title>Cetak Laporan</title>
<style>
body{
    font-family: Verdana;
    font-size: 13px;
}
h1{
    font-size: 14px;
    border-bottom: 4px double #000;
    padding:3px 0;
}
table{
    border-collapse: collapse;   
    margin-bottom: 10px; 
}
td, th{
    border: 1px solid #000;
    padding: 3px;
}
.wrapper{
    margin: 0 auto;
    width: 980px;
}
</style>
</head>
<body onload="window.print()">
<div class="wrapper">
<?php

if(is_file($_GET[m].'_cetak.php'))
    include $_GET[m].'_cetak.php';
?>
</div>
</body>
</html>