<?php
require_once("Aksesoris.php");
class Baju extends Aksesoris {
  private $untuk;
  private $size;
  private $merk;

  public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna, $untuk, $size, $merk) {
    parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk, $jenis, $bahan, $warna);
    $this->untuk = $untuk;
    $this->size = $size;
    $this->merk = $merk;
  }

  public function getUntuk() {
    return $this->untuk;
  }

  public function getSize() {
    return $this->size;
  }

  public function getMerk() {
    return $this->merk;
  }

  public function setUntuk($untuk) {
    $this->untuk = $untuk;
  }

  public function setSize($size) {
    $this->size = $size;
  }

  public function setMerk($merk) {
    $this->merk = $merk;
  }

  public function print() {
    parent::print();
    echo "Untuk: " . $this->untuk . "<br>";
    echo "Size: " . $this->size . "<br>";
    echo "Merk: " . $this->merk . "<br>";
  }
}







?>