<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $link->prepare("UPDATE t_mahasiswa SET namaMhs = ?, prodi = ?, alamat = ?, noHP = ? WHERE npm = ?");
    $stmt->bind_param("sssss", $namaMhs, $prodi, $alamat, $noHP, $npm);

    if ($stmt->execute()) {
        header("location:viewmahasiswa.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:viewmahasiswa.php");
}
?>