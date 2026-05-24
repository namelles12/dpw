<?php
include 'koneksi.php';

$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (10, 'Rahmat Dwi Prasetya', 'rahmat@example.com')";

$hasil = $link->query($sql);

if ($hasil === TRUE) {
    echo "Data dosen berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data: " . $link->error;
}

$link->close();
?>