<?php
require_once "../Product.php"; // load class Product dulu
session_start(); // mulai session

// cek apakah ada parameter id
if (!isset($_GET['id'])) {
    header("Location: index.php"); // kalau gak ada → balik ke index
    exit();
}

$id = $_GET['id']; // ambil id produk yang mau dihapus

// looping semua produk di session
foreach ($_SESSION['products'] as $key => $p) {
    // cek kalau id produk sama dengan id yang dikirim
    if ((string)$p->getId() === (string)$id) {
        unset($_SESSION['products'][$key]); // hapus produk
        $_SESSION['products'] = array_values($_SESSION['products']); // rapikan index array biar gak bolong
        break; // stop looping setelah ketemu
    }
}

// kalau semua produk sudah dihapus → reset counter id ke 1 lagi
if (empty($_SESSION['products'])) {
    $_SESSION['product_counter'] = 1;
}

// balik ke halaman index
header("Location: index.php");
exit();
