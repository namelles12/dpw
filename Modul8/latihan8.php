<?php
$array = array(
    "10" => array("udin", "ismail", "adi"),
    "11" => array("lukman", "fajri", "mahmud")
);

echo "<h3>Seluruh Data Array:</h3>";
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<h3>Data Kelas 10:</h3>";
print_r($array['10']); 
echo "<br><br>Menampilkan index 0 dari kelas 10: ";
echo $array['10'][0]; 
echo "<br>Menampilkan fajri: ";
echo $array['11'][1]; 
echo "<br>Menampilkan adi: ";
echo $array['10'][2]; 
echo "<hr>";

$array_simple = [
    "10" => ["udin", "ismail", "adi"],
    "11" => ["Lukman", "fajri", "mahmud"]
]; 

echo "<h3>Data dari Array Simple (Kelas 11):</h3>";
print_r($array_simple['11']);
?>