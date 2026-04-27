<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_POST["nama"]; ?>!</h2>
    <hr>
    <p>Terima kasih telah melakukan pendaftaran. Berikut adalah data yang kami terima:</p>
    
    <table border="0">
        <tr>
            <td>NIM</td>
            <td>: <?php echo $_POST["nim"]; ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>: <?php echo $_POST["tempat_tgl_lahir"]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?php echo $_POST["email"]; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $_POST["alamat"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $_POST["gender"]; ?></td>
        </tr>
    </table>

    <br>
    <a href="form_pendaftaran.html">Kembali ke Form</a>
</body>
</html>