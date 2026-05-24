<?php
include '../koneksi.php';

$input = isset($_GET['id']) ? $link->escape_string($_GET['id']) : '';

if (!empty($input)) {
    $statement = $link->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
    $statement->bind_param("i", $input);
} else {
    $statement = $link->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
}

$statement->execute();
$hasil = $statement->get_result();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dosen</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h2>Data Dosen</h2>
    
    <div class="nav">
        <a href="../index.php">Menu Utama</a> | 
        <a href="../mahasiswa/viewmahasiswa.php">Data Mahasiswa</a> | 
        <a href="../matakuliah/viewmatakuliah.php">Data Matakuliah</a>
    </div>

    <div class="search-box">
        <form action="" method="get">
            <input type="number" name="id" placeholder="Cari ID Dosen..." value="<?php echo htmlspecialchars($input); ?>">
            <button type="submit" class="btn" style="background:#333; color:white; cursor:pointer;">Cari</button>
        </form>
    </div>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="background: #007bff; color: white;">
            <th>ID Dosen</th>
            <th>Nama Dosen</th>
            <th>No HP / Email</th>
        </tr>
        <?php
        if ($hasil->num_rows > 0) {
            while ($baris = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($baris['idDosen']) . "</td>";
                echo "<td>" . htmlspecialchars($baris['namaDosen']) . "</td>";
                echo "<td>" . htmlspecialchars($baris['noHP']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='text-align:center;'>Data tidak ditemukan</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
<?php
$statement->close();
$link->close();
?>