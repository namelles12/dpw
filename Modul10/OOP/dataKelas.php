<?php
require_once('Manusia.php');
class mahasiswa extends Manusia
{
    protected $nim;
    protected $kelas;
    public function setNIM($nim)
    {
        $this->nim = $nim;
    }
    public function getNIM()
    {
        return $this->nim;
    }
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
    public function getKelas()
    {
        return $this->kelas;
    }
}
?>