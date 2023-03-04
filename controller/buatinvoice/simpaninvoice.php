<?php
session_start();

// Koneksi ke database
include '../koneksi.php';

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari session cart
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

// Simpan data ke dalam tabel cart_items
foreach ($cart_items as $item) {
    $id_invoice = $_SESSION['IdInvoice'];
    $id = $item['id'];
    $qty = $item['qty'];
    $harga = $item['harga'];

    $sql = "INSERT INTO detail_invoice (ID_Invoice, ID_Produk, Jumlah_Produk, Harga_Produk) VALUES ('$id_invoice', '$id', '$qty', '$harga')";

    if ($conn->query($sql) !== TRUE) {
        die("Error: " . $sql . "<br>" . $conn->error);
    }
}

// Hapus data dari session cart setelah berhasil disimpan ke dalam tabel
unset($_SESSION['cart']);

echo "Data cart_items berhasil disimpan ke dalam database";
?>
