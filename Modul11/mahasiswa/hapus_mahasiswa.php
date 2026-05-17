<?php
include '../koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    $stmt = $link->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("s", $npm);

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