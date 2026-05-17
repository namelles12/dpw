<?php
include '../koneksi.php';

if (isset($_POST['input'])) {
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $link->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if ($stmt->execute()) {
        header("location:viewmahasiswa.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:input_mahasiswa.php");
}
?>