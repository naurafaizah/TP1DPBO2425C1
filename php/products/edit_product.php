<?php
require_once "../Product.php"; // load class Product dulu
session_start(); // mulai session untuk ambil data produk

// cek kalau tidak ada parameter id → balik ke index
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$foundProduct = null; // variabel penampung produk yang ditemukan

// cari produk berdasarkan id di session
foreach ($_SESSION['products'] as $key => $product) {
    if ((string)$product->getId() === (string)$id) {
        $foundProduct = $product; // simpan produk yang ketemu
        $index = $key;            // simpan index array untuk update
        break;
    }
}

// kalau tidak ketemu → tampilkan pesan
if ($foundProduct === null) {
    echo "Produk tidak ditemukan.";
    exit();
}

// kalau form disubmit (method POST) → update data produk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['products'][$index]->setName($_POST['name']);
    $_SESSION['products'][$index]->setPrice($_POST['price']);
    $_SESSION['products'][$index]->setStock($_POST['stock']);
    $_SESSION['products'][$index]->setImage($_POST['image']);

    // setelah update balik ke index
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>

    <!-- form edit produk, value sudah otomatis terisi dari data lama -->
    <form method="post">
        Nama: <input type="text" name="name" value="<?= htmlspecialchars($foundProduct->getName()) ?>" required><br>
        Harga: <input type="number" name="price" value="<?= htmlspecialchars($foundProduct->getPrice()) ?>" required><br>
        Stok: <input type="number" name="stock" value="<?= htmlspecialchars($foundProduct->getStock()) ?>" required><br>
        Path Gambar: <input type="text" name="image" value="<?= htmlspecialchars($foundProduct->getImage()) ?>" required><br>
        <button type="submit">Update</button>
    </form>

    <!-- link kembali ke index -->
    <a href="index.php">Kembali</a>
</body>
</html>
