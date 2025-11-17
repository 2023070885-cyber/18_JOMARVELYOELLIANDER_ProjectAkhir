<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP</title>
     <link rel='stylesheet' href='daftar.CSS'>
</head>
<body class='body'>

<a href="webpage.php">webpage</a>

<br/>
<br/>
<table border="1">
    <tr>
        <th>Nama lengkap</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Negara</th>
        <th>Username</th>
         <th>Password</th>
         <th>opsi</th>
    </tr>

    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from register");
    while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $d['nama_lengkap']; ?></td>
            <td><?php echo $d['tanggal_lahir']; ?></td>
            <td><?php echo $d['jenis_kelamin']; ?></td>
            <td><?php echo $d['nomor_telephone']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['negara']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $d['nama_lengkap']; ?>">UPDATE</a>
                <a href="delete.php?id=<?php echo $d['nama_lengkap']; ?>">DELETE</a>
            </td>
        </tr>
        <?php 
    }
    ?>
</table>

</body>
</html>


