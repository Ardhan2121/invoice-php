<?php
// Buat koneksi ke database
// require('../koneksi.php');
require 'controller/koneksi.php';

// Inisialisasi array data
$labels = [];
$data = [];

// Ambil data total pendapatan per hari selama 1 minggu terakhir
for ($i = 6; $i >= 0; $i--) {
    $date = date('Y-m-d', strtotime("-$i days"));
    $sql = "SELECT SUM(Total) AS jumlah_pendapatan FROM invoice WHERE Tanggal_Invoice = '$date'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $jumlahPendapatan = $row['jumlah_pendapatan'] ?? 0;
    array_push($labels, $date);
    array_push($data, $jumlahPendapatan);
}
?>