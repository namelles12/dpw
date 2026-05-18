<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam_gabung = $_POST['jam_mulai'] . " - " . $_POST['jam_selesai'];

    $stmt = $link->prepare("UPDATE t_matakuliah SET namaMK = ?, sks = ?, jam = ? WHERE kodeMK = ?");
    $stmt->bind_param("siss", $namaMK, $sks, $jam_gabung, $kodeMK);

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