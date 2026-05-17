<?php
include '../koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $stmt = $link->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("s", $npm);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
    $stmt->close();
} else {
    header("location:viewmahasiswa.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container" style="max-width: 500px;">
    <h2>Edit Data Mahasiswa</h2>
    <div class="nav">
        <a href="viewmahasiswa.php">Kembali</a>
    </div>
    <form action="proses_editmahasiswa.php" method="post">
        <label>NPM:</label>
        <input type="text" name="npm" value="<?php echo htmlspecialchars($data['npm']); ?>" readonly style="background:#eee; width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Nama Mahasiswa:</label>
        <input type="text" name="namaMhs" value="<?php echo htmlspecialchars($data['namaMhs']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Prodi:</label>
        <input type="text" name="prodi" value="<?php echo htmlspecialchars($data['prodi']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>Alamat:</label>
        <textarea name="alamat" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px; height:8px; resize:none;"><?php echo htmlspecialchars($data['alamat']); ?></textarea>
        
        <label>No HP:</label>
        <input type="text" name="noHP" value="<?php echo htmlspecialchars($data['noHP']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <input type="submit" name="edit" value="Update Data" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; background-color: #28a745;">
    </form>
</div>
</body>
</html>