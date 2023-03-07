<?php
// Buat koneksi ke database
include 'controller/koneksi.php';
// include '../koneksi.php';

// Inisialisasi variabel total invoice, total pelanggan, dan jumlah pendapatan
$totalInvoice = 0;
$totalPelanggan = 0;
$jumlahPendapatan = 0;

function rupiah($number)
{
    $rupiah = "Rp " . number_format($number, 0, ',', '.');
    return $rupiah;
}

// Buat query SQL untuk menghitung total invoice, total pelanggan, dan jumlah pendapatan
$sql = "SELECT COUNT(DISTINCT ID_Invoice) AS total_invoice, 
               (SELECT COUNT(*) FROM pelanggan) AS total_pelanggan,
               SUM(total) AS jumlah_pendapatan 
        FROM invoice";

// Jika ada data POST berupa tanggal, filter berdasarkan tanggal tersebut
if (isset($_POST['tanggal'])) {
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $sql .= " WHERE Tanggal_Invoice = '$tanggal'";
} else {
    $today = date('Y-m-d');
    $sql .= " WHERE Tanggal_Invoice = '$today'";
}

// Jalankan query SQL
$result = mysqli_query($conn, $sql);

// Ambil hasil query dan masukkan ke dalam variabel
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $totalInvoice = $row['total_invoice'];
    $totalPelanggan = $row['total_pelanggan'];
    $jumlahPendapatan = $row['jumlah_pendapatan'];
}
?>