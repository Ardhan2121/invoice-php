<?php
session_start();

// Koneksi ke database
include '../koneksi.php';
$subtotal = $_POST['subtotal'];
$diskon = $_POST['diskon'];
$pajak = $_POST['pajak'];
$total = $_POST['total'];

$tanggal = $_SESSION['tanggalInvoice'];
$jatuhtempo = $_SESSION['tanggalJatuhTempo'];
$id_invoice = $_SESSION['IdInvoice'];

$id_pelanggan = $_SESSION['pelanggan']['id'];


// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari session cart
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

if (isset($subtotal)) {
    if (isset($jatuhtempo)) {
        $sql = "INSERT INTO invoice (ID_Invoice,ID_Pelanggan,Tanggal_Invoice,Subtotal,Pajak,Diskon,Total) VALUES ('$id_invoice', '$id_pelanggan', '$tanggal', '$subtotal', '$diskon', '$pajak', '$total')";
        if ($conn->query($sql) !== TRUE) {
            die("Error: " . $sql . "<br>" . $conn->error);
        }
    } else {
        $sql = "INSERT INTO invoice (ID_Invoice,ID_Pelanggan,Tanggal_Invoice,Tanggal_JatuhTempo,Subtotal,Pajak,Diskon,Total) VALUES ('$id_invoice', '$id_pelanggan', '$tanggal', '$jatuhtempo', '$subtotal', '$diskon', '$pajak', '$total')";
        if ($conn->query($sql) !== TRUE) {
            die("Error: " . $sql . "<br>" . $conn->error);
        }
    }

    foreach ($cart_items as $item) {
        $id = $item['id'];
        $qty = $item['qty'];
        $harga = $item['harga'];

        $sql = "INSERT INTO detail_invoice (ID_Invoice, ID_Produk, Jumlah_Produk, Harga_Jual) VALUES ('$id_invoice', '$id', '$qty', '$harga')";

        if ($conn->query($sql) !== TRUE) {
            die("Error: " . $sql . "<br>" . $conn->error);
        }
    }
    //insert ke tabel invoice
}


// Hapus data dari session cart setelah berhasil disimpan ke dalam tabel
// unset($_SESSION['cart']);
// unset($_SESSION['tanggalInvoice']);
// unset($_SESSION['tanggalJatuhTempo']);
// unset($_SESSION['IdInvoice']);
// unset($_SESSION['pelanggan']);


echo $id_invoice;
?>