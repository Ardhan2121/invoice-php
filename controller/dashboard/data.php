<?php
// Koneksi ke database
require('../koneksi.php');

// Cek apakah ada data post berupa tanggal
if (isset($_POST["tanggal"])) {
    $tanggal = $_POST["tanggal"];
} else {
    $tanggal = date("Y-m-d"); // Jika tidak ada data post, tampilkan data hari ini
}

// Query untuk mengambil total invoice, total pelanggan, dan jumlah pendapatan berdasarkan tanggal
$sql = "SELECT COUNT(*) AS total_invoice, COUNT(DISTINCT pelanggan) AS total_pelanggan, SUM(total_harga) AS jumlah_pendapatan FROM invoice WHERE DATE(tanggal) = '" . $tanggal . "'";
$result = mysqli_query($conn, $sql);

// Ambil data dari hasil query
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $total_invoice = $row["total_invoice"];
    $total_pelanggan = $row["total_pelanggan"];
    $jumlah_pendapatan = $row["jumlah_pendapatan"];
} else {
    $total_invoice = 0;
    $total_pelanggan = 0;
    $jumlah_pendapatan = 0;
}

// Tampilkan data dalam format JSON
$data = array(
    "total_invoice" => $total_invoice,
    "total_pelanggan" => $total_pelanggan,
    "jumlah_pendapatan" => $jumlah_pendapatan
);
echo json_encode($data);

?>