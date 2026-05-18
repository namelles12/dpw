<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Matakuliah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container" style="max-width: 500px;">
    <h2>Tambah Matakuliah</h2>
    
    <div class="nav">
        <a href="viewmatakuliah.php">Kembali ke Daftar</a>
    </div>

    <form action="proses_inputmatakuliah.php" method="post">
        <label for="kodeMK">Kode Matakuliah:</label>
        <input type="text" name="kodeMK" id="kodeMK" placeholder="Contoh: MK001" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label for="namaMK">Nama Matakuliah:</label>
        <input type="text" name="namaMK" id="namaMK" placeholder="Masukkan nama matakuliah" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label for="sks">SKS:</label>
        <input type="number" name="sks" id="sks" min="1" max="6" placeholder="Jumlah SKS" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Waktu Perkuliahan (Format 24 Jam):</label>
        <div style="display: flex; gap: 10px; align-items: center; margin: 10px 0;">
            <input type="text" name="jam_mulai" placeholder="07:00" pattern="[0-9]{2}:[0-9]{2}" required style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <span>s/d</span>
            <input type="text" name="jam_selesai" placeholder="09:30" pattern="[0-9]{2}:[0-9]{2}" required style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <input type="submit" name="input" value="Simpan Matakuliah" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; margin-top:10px; background-color: #17a2b8;">
    </form>
</div>

</body>
</html>