<?php
$jumlahUang = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500); 

echo "<h3>Penentuan Pecahan Uang Tabungan Ani</h3>";
echo "Total yang diambil: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $nilai) {
    $jumlahLembar = floor($jumlahUang / $nilai);
    $jumlahUang = $jumlahUang % $nilai;
    if ($jumlahLembar > 0) {
        echo "Pecahan Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlahLembar . " lembar/keping<br>";
    }
}

if ($jumlahUang > 0) {
    echo "Sisa uang: Rp. " . number_format($jumlahUang, 0, ',', '.');
}
?>