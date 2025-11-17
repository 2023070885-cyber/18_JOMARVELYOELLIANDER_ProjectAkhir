<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];
$metode_transportasi = $_POST['metode_transportasi'];
$tingkatan_layanan = $_POST['tingkatan_layanan'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$sql = "INSERT INTO pesan (kode, alamat_tujuan, tanggal_keberangkatan, metode_transportasi, tingkatan_layanan, metode_pembayaran) 
        VALUES ('$kode', '$alamat_tujuan', '$tanggal_keberangkatan', '$metode_transportasi', '$tingkatan_layanan', '$metode_pembayaran')";

if (mysqli_query($koneksi, $sql)) {
    header("Location: daftar_pesanan.php");
    exit();
} else {
    echo "Pemesanan gagal: " . mysqli_error($koneksi);
}
?>