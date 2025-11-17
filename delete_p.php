<?php

include 'koneksi.php';

$kode = $_GET['kode'];
mysqli_query($koneksi, "delete from pesan where kode='$kode'");


header("Location: daftar_pesanan.php");
?>