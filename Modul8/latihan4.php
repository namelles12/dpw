<?php
/* Operator logika dan perbandingan yang tersedia:
  ==  : Sama Dengan
  === : Identikal (Sama nilai dan tipe data)
  !=  : Tidak sama dengan
  <>  : Tidak sama dengan
  !== : Not identical
  >   : Lebih Besar dari
  <   : Kurang Dari
  >=  : Lebih besar atau Sama dengan
  <=  : Kurang dari atau sama dengan
  <=> : Spaceship (Mengembalikan -1, 0, atau 1)
*/

// Mengambil jam saat ini dalam format 24 jam (00-23)
$t = date("H"); 

echo "<h3>Struktur Kondisi IF</h3>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><h3>Struktur Kondisi If dan Else</h3>";
// Update nilai $t jika diperlukan untuk pengujian manual
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><h3>Struktur Kondisi Nested If (Elseif)</h3>";
if ($t < 11) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>