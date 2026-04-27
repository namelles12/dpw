<?php
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis"); 
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . "."; 
echo "<br>";
echo "saya suka " . $namaBuah[1]; 
echo "<br>";
echo "saya suka " . $namaBuah[2]; 
echo "<br>";
echo "saya suka " . $namaBuah[3]; 
echo "<br>";
echo "saya suka " . $namaBuah[4]; 
echo "<br><br>";

$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"40 Tahun"); 
$umur['ahmad'] = "50 Tahun"; 
echo "Umur andi adalah " . $umur['Andi']; 
echo "<br>";
echo "Daftar semua umur:<br>"; 
foreach ($umur as $nama => $nilai_umur) {
    echo "Nama: " . $nama . ", Umur: " . $nilai_umur . "<br>";
}
?>