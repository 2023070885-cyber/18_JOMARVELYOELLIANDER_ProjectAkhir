<?php

include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telephone = $_POST['nomor_telephone'];
$email = $_POST['email'];
$alamat= $_POST['alamat'];
$negara = $_POST['negara'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE registe SET nama_lengkap='$nama_lengkap', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', nomor_telephone='$nomor_telephone', email='$email', alamat='$alamat', negara='$negara', username='$username', password='$password' WHERE nama_lengkap='$nama_lengkap'");


header("Location: daftar.php");
?>