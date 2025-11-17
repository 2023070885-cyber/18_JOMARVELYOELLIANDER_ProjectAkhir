<!DOCTYPE html>
<html>
<head>
    <title>Edit Register</title>
</head>
<body>

<br/>
<a href="daftar.php">KEMBALI</a>
<br/><br/>
<h3>EDIT DATA REGISTER</h3>

<?php
include 'koneksi.php';

$nama_lengkap = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM register WHERE nama_lengkap = '$nama_lengkap'");
$d = mysqli_fetch_assoc($data);
?>

<form method="post" action="ubah.php">
    <table>

        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_lengkap_baru" value="<?php echo $d['nama_lengkap']; ?>" required>
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>" required></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="jenis_kelamin" required>
                    <option value="L" <?php if($d['jenis_kelamin']=='L') echo 'selected'; ?>>Laki-laki</option>
                    <option value="P" <?php if($d['jenis_kelamin']=='P') echo 'selected'; ?>>Perempuan</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Nomor Telephone</td>
            <td>:</td>
            <td><input type="number" name="nomor_telepon" value="<?php echo $d['nomor_telephone']; ?>" required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" value="<?php echo $d['email']; ?>" required></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required></td>
        </tr>

        <tr>
            <td>Negara</td>
            <td>:</td>
            <td><input type="text" name="negara" value="<?php echo $d['negara']; ?>" required></td>
        </tr>

        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $d['username']; ?>" required></td>
        </tr>

        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" value="<?php echo $d['password']; ?>" required></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="hidden" name="nama_lengkap_lama" value="<?php echo $d['nama_lengkap']; ?>">
                <input type="submit" value="simpan data">
            </td>
        </tr>

    </table>
</form>

</body>
</html>