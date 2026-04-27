<?php
$x = 10; 
while ($x > 5) { 
    echo "Nomor: $x <br>"; 
    $x--; 
}

echo "<br>";
$x = 1; 
do { 
    echo "Nomor: $x <br>"; 
    $x++; 
} while ($x <= 5); 

echo "<br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) { 
    echo "$value <br>"; 
}

echo "<br>";
for ($x = 1; $x <= 10; $x++) { 
    echo "Nomor: $x <br>"; 
}

echo "<br>";
for ($x = 0; $x < 10; $x++) { 
    if ($x == 4) { 
        break; 
    }
    echo "Nomor $x <br>"; 
}
?>