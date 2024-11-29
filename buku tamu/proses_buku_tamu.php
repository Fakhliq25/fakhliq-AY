<?php
include 'koneksi.php';
session_start();

if(!isset($_SESSION['username'])){
    header('Location: buku tamu.php');
}

?>