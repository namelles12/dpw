<?php
class buah
{
    public $nama;
    protected $warna;
    private $berat;
    public function setWarna($warna) {
        $this->warna = $warna;
    }
    public function setBerat($berat) {
        $this->berat = $berat;
    }

    public function tampilkanInfo() {
        return "Buah: " . $this->nama . ", Warna: " . $this->warna . ", Berat: " . $this->berat . " gram.";
    }
}

$mango = new buah();
$mango->nama = 'Mango';
$mango->setWarna('Yellow');
$mango->setBerat('300');   

echo $mango->tampilkanInfo();
?>