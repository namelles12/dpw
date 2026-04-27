<?php
$gajiPokok = 3250000;      
$tunjangan = 1200000;      
$pajakPersen = 0.1;        
$gajiKotor = $gajiPokok + $tunjangan;
$pajakNominal = $gajiKotor * $pajakPersen;
$gajiBersih = $gajiKotor - $pajakNominal;
echo "<h3>Perhitungan Gaji Bulanan Obi</h3>";
echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp. " . number_format($pajakNominal, 0, ',', '.') . "<br>";
echo "<hr>";
echo "<b>Gaji Bersih yang diterima Obi: Rp. " . number_format($gajiBersih, 0, ',', '.') . "</b>";
?>