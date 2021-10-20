<?php
class M_sepatu extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $merk, $harga;
 //method penjumlahan
 public function getHarga($merk = null)
 {
    $this->merk = $merk;
    if($this->merk == "Nike")
        {$this->harga=375000;}
    elseif($this->merk == "Adidas")
        {$this->harga=300000;}
    elseif($this->merk == "Kickers")
        {$this->harga=250000;}
    elseif($this->merk == "Eiger")
        {$this->harga=275000;}
    elseif($this->merk == "Bucherri")
        {$this->harga=400000;}
 return $this->harga;
 }
}
?>