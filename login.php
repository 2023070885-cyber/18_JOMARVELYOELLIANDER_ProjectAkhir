<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel='stylesheet' href='login.css'>
</head>
<body>
<div class='container'>
    <h1>LOGIN</h1>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<p style='color:red;'>Username atau password salah!</p>";
        } elseif ($_GET['pesan'] == "logout") {
            echo "<p style='color:green;'>Anda telah logout.</p>";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "<p style='color:orange;'>Silakan login terlebih dahulu!</p>";
        }
    }
    ?>

    <form method='post' action='login_aksi.php'>
        <fieldset>
        <table>
            <tr>
                <td><label>Username</label></td>
                <td>:</td>
                <td><input type='text' name='username' required placeholder='username'></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td>:</td>
                <td><input type='password' name='password' required placeholder='password'></td>
            </tr>
            <tr>
                <td colspan='3' style="text-align:center;">
                    <button type='submit' name='login'>LOGIN</button>
                    <p>Belum punya akun? <a href='register.php'>Daftar di sini</a></p>
                    <a href='homepage.php'>Kembali ke homepage</a>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</div>
</body>
</html>