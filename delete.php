<?php

include 'koneksi.php';

$nama_lengkap = $_GET['id'];
mysqli_query($koneksi, "delete from register where nama_lengkap='$nama_lengkap'");


header("Location: daftar.php");
?>