<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel='stylesheet' href='register.css'>
</head>
<body>
<div class='containerR'>
    <h1>FORM REGISTRATION</h1>

    <form method='post' action='register_aksi.php'>
        <fieldset>
        <table>
            <tr><td>Nama Lengkap</td><td>:</td><td><input type='text' name='nama_lengkap' required placeholder='nama lengkap'></td></tr>
            <tr><td>Tanggal Lahir</td><td>:</td><td><input type='text' name='tanggal_lahir' required  placeholder='HH,BB,TTTT'></td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td>
                <select name='jenis_kelamin' required>
                    <option value='L'>L</option>
                    <option value='P'>P</option>
                </select>
            </td></tr>
            <tr><td>Nomor Telephone</td><td>:</td><td><input type='number' name='nomor_telephone' required placeholder='nomor telephone'></td></tr>
            <tr><td>Email</td><td>:</td><td><input type='email' name='email' required placeholder='email'></td></tr>
            <tr><td>Alamat</td><td>:</td><td><input type='text' name='alamat' required placeholder='alamat'></td></tr>
            <tr><td>Negara</td><td>:</td><td><input type='text' name='negara' required placeholder='negara'></td></tr>
            <tr><td>Username</td><td>:</td><td><input type='text' name='username' required placeholder='username'></td></tr>
            <tr><td>Password</td><td>:</td><td><input type='password' name='password' required placeholder='password'></td></tr>
            <tr>
                <td colspan='3' style='text-align:center;'>
                    <button type='submit'>Daftar</button>
                    <p>Sudah punya akun? <a href='login.php'>Login di sini</a></p>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</div>
</body>
</html>
