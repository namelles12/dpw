<?php
include '../koneksi.php';
$search = isset($_GET['cari']) ? $_GET['cari'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h2>Data Mahasiswa</h2>
    <div class="nav">
        <a href="../index.php">Menu Utama</a> | 
        <a href="../dosen/viewdosen.php">Data Dosen</a> | 
        <a href="../matakuliah/viewmatakuliah.php">Data Matakuliah</a>
    </div>
    <div class="search-box">
        <form action="" method="get">
            <input type="text" name="cari" placeholder="Cari Nama Mahasiswa..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn" style="background:#333; color:white; cursor:pointer;">Cari</button>
        </form>
    </div>
    <a href="input_mahasiswa.php" class="btn btn-tambah" style="background-color: #28a745;">Tambah Mahasiswa</a>
    <table>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php
        if (!empty($search)) {
            $param = "%" . $search . "%";
            $stmt = $link->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
            $stmt->bind_param("s", $param);
        } else {
            $stmt = $link->prepare("SELECT * FROM t_mahasiswa ORDER BY npm ASC");
        }
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while($data = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data['npm']) . "</td>";
                echo "<td>" . htmlspecialchars($data['namaMhs']) . "</td>";
                echo "<td>" . htmlspecialchars($data['prodi']) . "</td>";
                echo "<td>" . htmlspecialchars($data['alamat']) . "</td>";
                echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
                echo "<td>
                        <a href='edit_mahasiswa.php?npm=" . htmlspecialchars($data['npm']) . "' class='btn btn-edit'>Edit</a>
                        <a href='hapus_mahasiswa.php?npm=" . htmlspecialchars($data['npm']) . "' class='btn btn-hapus' onclick='return confirm(\"Hapus mahasiswa ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6' style='text-align:center;'>Data tidak ditemukan</td></tr>";
        }
        $stmt->close();
        ?>
    </table>
</div>
</body>
</html>