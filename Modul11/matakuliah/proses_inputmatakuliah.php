<?php
include '../koneksi.php';

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam_gabung = $_POST['jam_mulai'] . " - " . $_POST['jam_selesai'];

    $stmt = $link->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $kodeMK, $namaMK, $sks, $jam_gabung);

    if ($stmt->execute()) {
        header("location:viewmatakuliah.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:input_matakuliah.php");
}
?>