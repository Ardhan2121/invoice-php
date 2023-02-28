<?php
session_start();
error_reporting(0);

// Mengecek apakah variabel session untuk data pembelian telah dibuat atau belum
if (!isset($_SESSION['dataPembelian'])) {
    $_SESSION['dataPembelian'] = array();
}

// Menerima data pembelian yang dikirim melalui AJAX
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

if (isset($id)) {
    // Menyiapkan data pembelian baru
    $produk = array(
        'id' => $id,
        'nama' => $nama,
        'harga' => $harga,
        'qty' => $qty
    );

        // Menambahkan data pembelian baru ke dalam variabel session yang telah dibuat
        array_push($_SESSION['dataPembelian'], $produk);
}


// Mengirimkan data respons ke AJAX bahwa data pembelian telah berhasil disimpan
echo json_encode($_SESSION['dataPembelian']);
?>