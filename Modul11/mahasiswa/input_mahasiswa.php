<!DOCTYPE html>
<html>
<head>
    <title>Input Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container" style="max-width: 500px;">
    <h2>Tambah Data Mahasiswa</h2>
    <div class="nav">
        <a href="viewmahasiswa.php">Kembali ke Daftar</a>
    </div>
    <form action="proses_inputmahasiswa.php" method="post">
        <label>NPM:</label>
        <input type="text" name="npm" placeholder="Masukkan NPM" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Nama Mahasiswa:</label>
        <input type="text" name="namaMhs" placeholder="Nama Lengkap" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Prodi:</label>
        <input type="text" name="prodi" placeholder="Program Studi" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Alamat:</label>
        <input type="text" name="alamat" placeholder="Alamat Lengkap" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>No HP:</label>
        <input type="text" name="noHP" placeholder="Nomor WhatsApp" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <input type="submit" name="input" value="Simpan Data" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; margin-top:10px; background-color: #28a745;">
    </form>
</div>
</body>
</html>