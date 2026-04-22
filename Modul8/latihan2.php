<?php
    $txt = "Selamat datang"; 
    $txt2 = "Politeknik Negeri Madiun"; 
    $x = 5; 
    $y = 10.5; 

    echo "<p>isi Variable txt adalah: $txt</p>"; 
    echo "<p>isi Variable x adalah: $x</p>"; 
    echo "<p>isi Variable y adalah: $y</p>"; 
    echo "Belajar PHP di " . $txt2 . "<br>"; // [cite: 48, 49]
    echo $x + $y; 
    echo "<br>";
    define("nama_konstanta", "David Qhoiri Satriyo Wibowo"); 
    echo "<br>" . nama_konstanta; // [cite: 53]
?>