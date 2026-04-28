<?php
require_once('kelas/Manusia.php');
$david = new Manusia();
$david->setNama("David Qhoiri Satriyo Wibowo");
echo "Nama Lengkap: " . $david->getNama() . "<br>";
$saya = new Manusia();
$saya->setNama("Mahasiswa Semester 2 di Politeknik Negeri Madiun"); 
$saya->setUmur(19);         
echo "Identitas Saya: " . $saya->getNama() . "<br>";
echo "Umur Saya: " . $saya->getUmur() . " Tahun<br>";
echo "NIK: " . $saya->getNIK();
?>