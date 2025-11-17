<!DOCTYPE html>
<html>
<head>
    <title>Edit Pemesanan</title>
</head>
<body>

<br/>
<a href="daftar_pesanan.php">KEMBALI</a>
<br/><br/>
<h3>EDIT DATA PEMESANAN</h3>

<?php
include 'koneksi.php';

$kode = $_GET['kode'];
$data = mysqli_query($koneksi, "SELECT * FROM pesan WHERE kode = '$kode'");
$d = mysqli_fetch_assoc($data);
?>

<form method="post" action="ubah_p.php">
    <table>

        <tr>
            <td>Kode</td>
            <td>:</td>
            <td>
                <input type="text" name="kode_baru" value="<?php echo $d['kode']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>Alamat Tujuan</td>
            <td>:</td>
            <td><input type="text" name="alamat_tujuan" value="<?php echo $d['alamat_tujuan']; ?>" required></td>
        </tr>

        <tr>
            <td>Tanggal Keberangkatan</td>
            <td>:</td>
            <td><input type="text" name="tanggal_keberangkatan" value="<?php echo $d['tanggal_keberangkatan']; ?>" required></td>
        </tr>

        <tr>
            <td>Metode Transportasi</td>
            <td>:</td>
            <td><input type="text" name="metode_transportasi" value="<?php echo $d['metode_transportasi']; ?>" required></td>
        </tr>

        <tr>
            <td>Tingkatan Layanan</td>
            <td>:</td>
            <td><input type="text" name="tingkatan_layanan" value="<?php echo $d['tingkatan_layanan']; ?>" required></td>
        </tr>

        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td><input type="text" name="metode_pembayaran" value="<?php echo $d['metode_pembayaran']; ?>" required></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="hidden" name="kode_lama" value="<?php echo $d['kode']; ?>">
                <input type="submit" value="simpan pesanan">
            </td>
        </tr>

    </table>
</form>

</body>
</html>