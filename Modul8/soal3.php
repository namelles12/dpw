<?php
$dataSiswa = [
    ["nrp" => 1, "poin" => 75, "nama" => "Adi"],
    ["nrp" => 2, "poin" => 80, "nama" => "Joni"],
    ["nrp" => 3, "poin" => 65, "nama" => "Jihan"],
    ["nrp" => 4, "poin" => 70, "nama" => "Aya"],
    ["nrp" => 5, "poin" => 85, "nama" => "Ita"],
    ["nrp" => 6, "poin" => 90, "nama" => "Budi"],
    ["nrp" => 7, "poin" => 95, "nama" => "Tono"],
    ["nrp" => 8, "poin" => 65, "nama" => "Sari"],
    ["nrp" => 9, "poin" => 80, "nama" => "Lana"],
    ["nrp" => 10, "poin" => 55, "nama" => "Dina"]
];

echo "<h3>Analisis Data Siswa</h3>";
echo "Poin siswa dengan nomor urut 5 adalah: " . $dataSiswa[4]['poin'] . "<br>";
echo "Siswa yang memiliki poin 90 adalah: ";
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo $siswa['nama'];
    }
}
echo "<br>";
echo "Siswa dengan poin di atas 75: <br>";
$nomor = 1;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] > 75) {
        echo $nomor . ". " . $siswa['nama'] . " (" . $siswa['poin'] . ")<br>";
        $nomor++;
    }
}
?>