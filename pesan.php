<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' href='pesan.css'>
    <title>Register Page</title>
</head>

<body class='bodyr'>
<div class='containerR'>
    <a href="webpage.php">webpage</a>
    <h1>Form pemesanan</h1>

    <form method='post' action='pesan_aksi.php'>
        <fieldset>
        <table>
            <tr><td>kode</td><td>:</td><td><input type='text' name='kode' required placeholder='masukkan kode'></td></tr>
            <tr><td>alamat tujuan</td><td>:</td><td><input type='text' name='alamat_tujuan' required  placeholder='nama benua,negara,kota'></td></tr>
            <tr><td>tanggal keberangkatan</td><td>:</td><td><input type='text' name='tanggal_keberangkatan' required placeholder='DD,MM,YYYY'></td></tr>
            <tr><td>metode transportasi</td><td>:</td><td><input type='text' name='metode_transportasi' required placeholder='pesawat/kapal/kereta'></td></tr>
            <tr><td>tingkatan layanan</td><td>:</td><td><input type='text' name='tingkatan_layanan' required placeholder='ekonomi/business/firstclass'></td></tr>
            <tr><td>metode pembayaran</td><td>:</td><td><input type='text' name='metode_pembayaran' required placeholder='debit/credit/bank/e-wallet'></td></tr>
            <tr>
                <td colspan='3' style='text-align:center;'>
                    <button type='submit'>pesan</button>
                </td>
            </tr>
        </table>
        </fieldset>
    </form>
</div>
</body>
</html>
