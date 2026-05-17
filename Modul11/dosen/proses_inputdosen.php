<?php
include '../koneksi.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $stmt = $link->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
    $stmt->bind_param("ss", $namaDosen, $noHP);

    if ($stmt->execute()) {
        header("location:viewdosen.php");
    } else {
        die($link->error);
    }
    $stmt->close();
} else {
    header("location:input_dosen.php");
}
?>