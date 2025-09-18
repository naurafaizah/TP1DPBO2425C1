<?php
require_once "../Product.php"; // load class product dulu
session_start(); // mulai session

// bikin counter id kalau belum ada → mulai dari 1
if (!isset($_SESSION['product_counter'])) {
    $_SESSION['product_counter'] = 1;
}

// kalau array products belum ada, inisialisasi jadi array kosong
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

// cek apakah form disubmit (pakai method post)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ambil id dari counter, lalu counter ditambah 1
    $id    = $_SESSION['product_counter']++;
    // ambil data dari input form
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image']; // path gambar

    // buat objek product baru
    $product = new Product($id, $name, $price, $stock, $image);
    // simpan produk ke dalam session
    $_SESSION['products'][] = $product;

    // setelah tambah → balik ke index
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Produk</title></head>
<body>
    <h2>Tambah Produk</h2>
    <!-- form input untuk menambah produk baru -->
    <form method="post">
        Nama: <input type="text" name="name" required><br>
        Harga: <input type="number" name="price" required><br>
        Stok: <input type="number" name="stock" required><br>
        Path Gambar: <input type="text" name="image" required><br>
        <button type="submit">Simpan</button>
    </form>
    <!-- tombol kembali ke daftar produk -->
    <a href="index.php">Kembali</a>
</body>
</html>
