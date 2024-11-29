<?php
include("koneksi.php");
$nama=$_POST["nm"];
$nomor_hp=$_POST["nom"];
$email=$_POST["eml"];
$SQL="insert into data_tamu(nama,nomor_hp,email) values ('$nama','$nomor_hp','$email')";
if(mysqli_query($koneksi,$SQL)){
    echo "<script>alert('data berhasil tersimpan'); window.location.href = 'buku_tamu.php';</script>";
}else{
    echo "Error:" . $SQL . "<br>" . mysqli_error($koneksi);
}
?>