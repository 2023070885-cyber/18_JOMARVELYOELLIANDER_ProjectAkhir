<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: webpage.php");
    exit();
} else {
    header("Location: login.php?pesan=gagal");
    exit();
}
?>