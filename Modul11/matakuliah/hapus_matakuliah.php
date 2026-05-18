<?php
include '../koneksi.php';

if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    $stmt = $link->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("s", $kode);

    if ($stmt->execute()) {
        header("location:viewmatakuliah.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:viewmatakuliah.php");
}
?>