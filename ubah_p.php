<?php
include 'koneksi.php';

$kode = $_POST['kode_lama'];
$kode_baru = $_POST['kode_baru'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
$metode_transportasi = $_POST['metode_transportasi'];
$tingkatan_layanan = $_POST['tingkatan_layanan'];
$metode_pembayaran = $_POST['metode_pembayaran'];

mysqli_query($koneksi, "UPDATE pesan SET 
    kode='$kode_baru', 
    alamat_tujuan='$alamat_tujuan', 
    tanggal_keberangkatan='$tanggal_keberangkatan', 
    metode_transportasi='$metode_transportasi', 
    tingkatan_layanan='$tingkatan_layanan', 
    metode_pembayaran='$metode_pembayaran' 
    WHERE kode='$kode'");

header("Location: daftar_pesanan.php");
?>