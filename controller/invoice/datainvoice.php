<?php
// Memulai session
session_start();

// Menetapkan nilai session dari input POST
$_SESSION['tanggalInvoice'] = $_POST['tanggalInvoice'];
$_SESSION['tanggalJatuhTempo'] = $_POST['tanggalJatuhTempo'];

//data pelanggan
$_SESSION['namaPelanggan'] = $_POST['namaPelanggan'];
$_SESSION['emailPelanggan'] = $_POST['emailPelanggan'];
$_SESSION['teleponPelanggan'] = $_POST['teleponPelanggan'];
$_SESSION['alamatPelanggan'] = $_POST['alamatPelanggan'];
?>