<?php
require_once('kelas/mahasiswa.php');
$mhs1 = new mahasiswa();
$mhs1->setNama("David Qhoiri Satriyo Wibowo");
$mhs1->setNIM("253307044");   
$mhs1->setKelas("2B");

echo "<h3>Data Mahasiswa</h3>";
echo "Nama  : " . $mhs1->getNama() . "<br>";
echo "NIM   : " . $mhs1->getNIM() . "<br>";
echo "Kelas : " . $mhs1->getKelas() . "<br>";
?>