<?php

class PetShop {
    private $id;
    private $nama_produk;
    private $harga_produk;
    private $stok_produk;
    private $foto_produk;

    public function __construct($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk) {
        $this->id = $id;
        $this->nama_produk = $nama_produk;
        $this->harga_produk = $harga_produk;
        $this->stok_produk = $stok_produk;
        $this->foto_produk = $foto_produk;
    }

    public function getId() {
        return $this->id;
    }

    public function getNamaProduk() {
        return $this->nama_produk;
    }

    public function getHargaProduk() {
        return $this->harga_produk;
    }

    public function getStokProduk() {
        return $this->stok_produk;
    }

    public function getFotoProduk() {
        return $this->foto_produk;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNamaProduk($nama_produk) {
        $this->nama_produk = $nama_produk;
    }

    public function setHargaProduk($harga_produk) {
        $this->harga_produk = $harga_produk;
    }

    public function setStokProduk($stok_produk) {
        $this->stok_produk = $stok_produk;
    }

    public function setFotoProduk($foto_produk) {
        $this->foto_produk = $foto_produk;
    }

    public function print() {
        echo "ID: " . $this->id . "<br>";
        echo "Nama Produk: " . $this->nama_produk . "<br>";
        echo "Harga Produk: " . $this->harga_produk . "<br>";
        echo "Stok Produk: " . $this->stok_produk . "<br>";
        echo "Foto Produk: " . $this->foto_produk . "<br>";
    }

    public function findName($name) {
        if (strpos($this->nama_produk, $name) !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePetShop($id) {
        $this->id = $id;
        $this->nama_produk = "";
        $this->harga_produk = "";
        $this->stok_produk = "";
        $this->foto_produk = "";
    }

    public function updatePetShop($id, $nama_produk, $harga_produk, $stok_produk, $foto_produk) {
        $this->id = $id;
        $this->nama_produk = $nama_produk;
        $this->harga_produk = $harga_produk;
        $this->stok_produk = $stok_produk;
        $this->foto_produk = $foto_produk;
    }

}

?>
