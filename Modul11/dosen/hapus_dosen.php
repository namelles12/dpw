<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $link->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("location:viewdosen.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:viewdosen.php");
}
?>