<?php
class buah2 {
  public $name;
  public $color;
  public $weight;

  public function isi_data($n, $c, $w) {
    $this->name = $n;
    $this->set_color($c);  
    $this->set_weight($w);
  }

  protected function set_color($n) {
    $this->color = $n;
  }

  private function set_weight($n) {
    $this->weight = $n;
  }
}

$mango = new buah2();
$mango->isi_data('Mango', 'Yellow', '300'); 
echo "Nama: " . $mango->name;
?>