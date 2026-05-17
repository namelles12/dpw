<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $link->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
    $stmt->close();
} else {
    header("location:viewdosen.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container" style="max-width: 500px;">
    <h2>Edit Data Dosen</h2>
    <div class="nav">
        <a href="viewdosen.php">Kembali</a>
    </div>
    <form action="proses_editdosen.php" method="post">
        <input type="hidden" name="idDosen" value="<?php echo htmlspecialchars($data['idDosen']); ?>">
        
        <label>Nama Dosen:</label>
        <input type="text" name="namaDosen" value="<?php echo htmlspecialchars($data['namaDosen']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <label>No HP:</label>
        <input type="text" name="noHP" value="<?php echo htmlspecialchars($data['noHP']); ?>" required style="width:100%; padding:8px; margin:10px 0; border:1px solid #ddd; border-radius:4px;">
        
        <input type="submit" name="edit" value="Update Data" class="btn btn-tambah" style="width:100%; border:none; cursor:pointer; background-color: #007bff;">
    </form>
</div>
</body>
</html>