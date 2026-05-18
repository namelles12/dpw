<?php
include '../koneksi.php';

if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    $stmt = $link->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("s", $kode);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();

    $waktu = explode(" - ", $data['jam']);
    $jam_mulai = isset($waktu[0]) ? $waktu[0] : '';
    $jam_selesai = isset($waktu[1]) ? $waktu[1] : '';
    $stmt->close();
} else {
    header("location:viewmatakuliah.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container" style="max-width: 500px;">
    <h2>Edit Data Matakuliah</h2>
    <div class="nav">
        <a href="viewmatakuliah.php">Kembali</a>
    </div>
    <form action="proses_editmatakuliah.php" method="post">
        <label>Kode MK:</label>
        <input type="text" name="kodeMK" value="<?php echo htmlspecialchars($data['kodeMK']); ?>" readonly style="background:#eee; width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Nama Matakuliah:</label>
        <input type="text" name="namaMK" value="<?php echo htmlspecialchars($data['namaMK']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>SKS:</label>
        <input type="number" name="sks" value="<?php echo htmlspecialchars($data['sks']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Waktu Perkuliahan (Format 24 Jam):</label>
        <div style="display: flex; gap: 10px; align-items: center; margin: 10px 0;">
            <input type="text" name="jam_mulai" value="<?php echo htmlspecialchars($jam_mulai); ?>" placeholder="07:00" pattern="[0-9]{2}:[0-9]{2}" required style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <span>s/d</span>
            <input type="text" name="jam_selesai" value="<?php echo htmlspecialchars($jam_selesai); ?>" placeholder="09:30" pattern="[0-9]{2}:[0-9]{2}" required style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
        </div>
        
        <input type="submit" name="edit" value="Update Data" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; background-color: #17a2b8;">
    </form>
</div>
</body>
</html>