<?php
require_once('kelas/akunBank.php');
$nasabah1 = new akunBank("10102030", 500000);
$nasabah1->setor(200000);
$nasabah1->tarik(100000); 
echo "Saldo saat ini: Rp " . number_format($nasabah1->getSaldoSekarang(), 0, ',', '.') . "<br>";
$saldoFinal = $nasabah1->getSaldoAkhir();
echo "<b>Saldo akhir setelah potongan pajak (11%): Rp " . number_format($saldoFinal, 0, ',', '.') . "</b>";
?>