<?php
$host="localhost";
$user="root";
$pass="";
$db="buku tamu";
$koneksi=mysqli_connect($host,$user,$pass) or mysqli_error();
mysqli_select_db($koneksi,$db);
?>