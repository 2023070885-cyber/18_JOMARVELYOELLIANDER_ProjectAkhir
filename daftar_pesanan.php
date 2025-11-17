<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemesanan</title>
     <link rel='stylesheet' href='daftar_pesanan.css'>
</head>
<body>

<a href="pesan.php">Form Pemesanan</a>
<br/><br/>

<table border="1">
    <tr>
        <th>Kode</th>
        <th>Alamat Tujuan</th>
        <th>Tanggal Keberangkatan</th>
        <th>Metode Transportasi</th>
        <th>Tingkatan Layanan</th>
        <th>Metode Pembayaran</th>
        <th>Opsi</th>
    </tr>

    <?php
    include 'koneksi.php';
    
    $data = mysqli_query($koneksi, "SELECT * FROM pesan");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['kode']; ?></td>
            <td><?php echo $d['alamat_tujuan']; ?></td>
            <td><?php echo $d['tanggal_keberangkatan']; ?></td>
            <td><?php echo $d['metode_transportasi']; ?></td>
            <td><?php echo $d['tingkatan_layanan']; ?></td>
            <td><?php echo $d['metode_pembayaran']; ?></td>
            <td>
                <a href="update_p.php?kode=<?php echo $d['kode']; ?>">UPDATE</a>
                <a href="delete_p.php?kode=<?php echo $d['kode']; ?>" onclick="return confirm('Apakah yakin ingin dihapus?')">DELETE</a>
            </td>
        </tr>
        <?php 
    }
    ?>
</table>

<a href="webpage.php">kembali ke webpage</a>

</body>
</html>

