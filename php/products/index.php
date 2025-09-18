<?php
require_once "../Product.php"; // import class product
session_start(); // mulai session buat simpan data produk

// inisialisasi array kosong kalau belum ada produk di session
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}
$products = $_SESSION['products']; // ambil data produk dari session
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        /* styling sederhana untuk halaman */
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        a.btn {
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }
        .btn-add {
            background-color: #ffc2e3;
            color: white;
            margin-bottom: 15px;
            display: inline-block;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #fd85bd;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            border-radius: 6px;
        }
        .btn-action {
            padding: 6px 10px;
            margin: 2px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
            display: inline-block;
        }
        .btn-edit {
            background-color: #ffc107;
            color: #000;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Manajemen Produk</h2>

    <!-- tombol untuk ke halaman tambah produk -->
    <a href="add_product.php" class="btn btn-add">+ Tambah Produk</a>

    <!-- tabel daftar produk -->
    <table>
        <tr>
            <th>ID</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Gambar</th><th>Aksi</th>
        </tr>

        <?php if (empty($products)): ?>
            <!-- kalau belum ada produk -->
            <tr><td colspan="6">Belum ada produk.</td></tr>
        <?php else: ?>
            <!-- looping semua produk -->
            <?php foreach ($_SESSION['products'] as $product): ?>
            <tr>
                <td><?= $product->getId(); ?></td>
                <td><?= $product->getName(); ?></td>
                <td>Rp <?= number_format($product->getPrice(), 0, ',', '.'); ?></td>
                <td><?= $product->getStock(); ?></td>
                <td><img src="<?= $product->getImage(); ?>" alt="Gambar" width="50"></td>
                <td>
                    <!-- tombol edit -->
                    <a href="edit_product.php?id=<?= $product->getId(); ?>" class="btn btn-warning">Edit</a>
                    <!-- tombol delete dengan konfirmasi -->
                    <a href="delete_product.php?id=<?= $product->getId(); ?>" class="btn btn-danger"
                       onclick="return confirm('Yakin mau hapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
