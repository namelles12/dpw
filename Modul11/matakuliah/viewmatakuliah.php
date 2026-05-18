<?php
include '../koneksi.php';
$search = isset($_GET['cari']) ? $_GET['cari'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Matakuliah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <h2>Data Matakuliah</h2>
    <div class="nav">
        <a href="../index.php">Menu Utama</a> | 
        <a href="../dosen/viewdosen.php">Data Dosen</a> | 
        <a href="../mahasiswa/viewmahasiswa.php">Data Mahasiswa</a>
    </div>
    <div class="search-box">
        <form action="" method="get">
            <input type="text" name="cari" placeholder="Cari Nama Matakuliah..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit" class="btn" style="background:#333; color:white; cursor:pointer;">Cari</button>
        </form>
    </div>
    <a href="input_matakuliah.php" class="btn btn-tambah" style="background-color: #17a2b8;">Tambah Matakuliah</a>
    <table>
        <tr>
            <th>Kode MK</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Waktu Perkuliahan</th>
            <th>Aksi</th>
        </tr>
        <?php
        if (!empty($search)) {
            $param = "%" . $search . "%";
            $stmt = $link->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
            $stmt->bind_param("s", $param);
        } else {
            $stmt = $link->prepare("SELECT * FROM t_matakuliah ORDER BY kodeMK ASC");
        }
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while($data = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($data['kodeMK']) . "</td>";
                echo "<td>" . htmlspecialchars($data['namaMK']) . "</td>";
                echo "<td>" . htmlspecialchars($data['sks']) . "</td>";
                echo "<td>" . htmlspecialchars($data['jam']) . "</td>";
                echo "<td>
                        <a href='edit_matakuliah.php?kode=" . htmlspecialchars($data['kodeMK']) . "' class='btn btn-edit'>Edit</a>
                        <a href='hapus_matakuliah.php?kode=" . htmlspecialchars($data['kodeMK']) . "' class='btn btn-hapus' onclick='return confirm(\"Hapus matakuliah ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align:center;'>Data tidak ditemukan</td></tr>";
        }
        $stmt->close();
        ?>
    </table>
</div>
</body>
</html>