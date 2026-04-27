<?php
$nilaiAngka = 85; 
echo "Nilai Angka: " . $nilaiAngka . "<br>";

if ($nilaiAngka >= 90 && $nilaiAngka <= 100) {
    echo "Huruf Nilai: A"; 
} elseif ($nilaiAngka >= 80 && $nilaiAngka <= 89) {
    echo "Huruf Nilai: AB"; 
} elseif ($nilaiAngka >= 70 && $nilaiAngka <= 79) {
    echo "Huruf Nilai: B"; 
} elseif ($nilaiAngka >= 60 && $nilaiAngka <= 69) {
    echo "Huruf Nilai: BC"; 
} elseif ($nilaiAngka >= 0 && $nilaiAngka <= 59) {
    echo "Huruf Nilai: C"; 
} else {
    echo "Nilai tidak valid (harus antara 0-100)";
}
?>