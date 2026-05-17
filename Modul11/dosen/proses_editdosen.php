<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $idDosen   = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $stmt = $link->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $idDosen);

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