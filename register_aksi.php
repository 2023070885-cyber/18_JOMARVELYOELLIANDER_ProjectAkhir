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


if (mysqli_query($koneksi,"insert into register values('$nama_lengkap','$tanggal_lahir','$jenis_kelamin','$nomor_telephone','$email','$alamat','$negara','$username','$password')")) {
    header("Location: login.php");
} else {
    echo "Pendaftaran gagal: " . mysqli_error($koneksi);
}
?>