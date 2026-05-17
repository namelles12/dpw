<?php
include '../koneksi.php';

$search = isset($_GET['cari']) ? $_GET['cari'] : '';

if (!empty($search)) {
    $param = "%" . $search . "%";
    $statement = $link->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC");
    $statement->bind_param("s", $param);
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
            <input type="text" name="cari" placeholder="Cari Nama Dosen..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn" style="background:#333; color:white; cursor:pointer;">Cari</button>
        </form>
    </div>

    <a href="input_dosen.php" class="btn btn-tambah" style="background-color: #28a745;">Tambah Dosen</a>

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr style="background: #007bff; color: white;">
            <th>No</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1; // Membuat penomoran otomatis menyesuaikan data yang ada
        if ($hasil->num_rows > 0) {
            while ($baris = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; // Nomor otomatis bertambah 1, 2, 3...
                echo "<td>" . htmlspecialchars($baris['namaDosen']) . "</td>";
                echo "<td>" . htmlspecialchars($baris['noHP']) . "</td>";
                echo "<td>
                        <a href='edit_dosen.php?id=" . htmlspecialchars($baris['idDosen']) . "' class='btn btn-edit'>Edit</a>
                        <a href='hapus_dosen.php?id=" . htmlspecialchars($baris['idDosen']) . "' class='btn btn-hapus' onclick='return confirm(\"Hapus dosen ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='text-align:center;'>Data tidak ditemukan</td></tr>";
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