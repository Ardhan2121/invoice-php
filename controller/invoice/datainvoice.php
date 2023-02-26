<?php
// Memulai session
session_start();

// Menetapkan nilai session dari input POST
$_SESSION['tanggalInvoice'] = $_POST['tanggalInvoice'];
$_SESSION['tanggalJatuhTempo'] = $_POST['tanggalJatuhTempo'];

// Mencetak nilai session untuk mengecek
echo $_SESSION['tanggalInvoice'] . " - " . $_SESSION['tanggalJatuhTempo'];
?>