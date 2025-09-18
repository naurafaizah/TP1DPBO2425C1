<?php
class Product {
    // atribut privat, hanya bisa diakses lewat getter dan setter
    private $id;     // id produk
    private $name;   // nama produk
    private $price;  // harga produk
    private $stock;  // stok produk
    private $image;  // path gambar produk

    // constructor untuk inisialisasi objek product
    public function __construct($id, $name, $price, $stock, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
    }

    // getter untuk ambil nilai atribut
    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getPrice() { return $this->price; }
    public function getStock() { return $this->stock; }
    public function getImage() { return $this->image; }

    // setter untuk ubah nilai atribut tertentu
    public function setName($name) { $this->name = $name; }
    public function setPrice($price) { $this->price = $price; }
    public function setStock($stock) { $this->stock = $stock; }
    public function setImage($image) { $this->image = $image; }
}
?>
