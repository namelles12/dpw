<?php
class akunBank
{
    protected $nomorAkun;
    protected $saldo;
    public function __construct($nomorAkun, $saldoAwal)
    {
        $this->nomorAkun = $nomorAkun;
        $this->saldo = $saldoAwal;
        echo "Akun " . $this->nomorAkun . " berhasil dibuat.<br>";
    }
    public function setor($jumlah)
    {
        $this->saldo += $jumlah;
        echo "Setor: Rp " . number_format($jumlah, 0, ',', '.') . " Berhasil.<br>";
    }
    public function tarik($jumlah)
    {
        if ($this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
            echo "Tarik: Rp " . number_format($jumlah, 0, ',', '.') . " Berhasil.<br>";
        } else {
            echo "Tarik Gagal: Saldo tidak mencukupi!<br>";
        }
    }
    public function getSaldoAkhir()
    {
        $pajak = $this->saldo * 0.11;
        $saldoSetelahPajak = $this->saldo - $pajak;
        return $saldoSetelahPajak;
    }

    public function getSaldoSekarang()
    {
        return $this->saldo;
    }
}
?>