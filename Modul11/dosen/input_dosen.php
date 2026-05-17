<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container" style="max-width: 500px;">
    <h2>Input Data Dosen</h2>
    
    <div class="nav">
        <a href="viewdosen.php">Kembali ke Daftar</a>
    </div>

    <form id="form_dosen" action="proses_inputdosen.php" method="post">
        <label for="namaDosen">Nama Dosen:</label>
        <input type="text" name="namaDosen" id="namaDosen" placeholder="Masukkan nama lengkap" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label for="noHP">No HP:</label>
        <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <input type="submit" name="input" value="Simpan Data" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; margin-top:10px;">
    </form>
</div>

</body>
</html>