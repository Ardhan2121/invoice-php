<?php
// Koneksi ke database
require('../koneksi.php');

if (isset($_POST['StartDate'])) {
    $start = $_POST['StartDate'];
    $to = $_POST['ToDate'];
    $query = "SELECT pelanggan.ID_Pelanggan, pelanggan.Nama_Pelanggan, invoice.*
FROM pelanggan
INNER JOIN invoice ON pelanggan.ID_Pelanggan = invoice.ID_Pelanggan
WHERE pelanggan.ID_Pelanggan = invoice.ID_Pelanggan and Tanggal_Invoice between '$start' and '$to'";
} else {
    // Query untuk mengambil data pelanggan
    $query = "SELECT pelanggan.ID_Pelanggan, pelanggan.Nama_Pelanggan, invoice.*
FROM pelanggan
INNER JOIN invoice ON pelanggan.ID_Pelanggan = invoice.ID_Pelanggan
WHERE pelanggan.ID_Pelanggan = invoice.ID_Pelanggan;
";
}

$result = mysqli_query($conn, $query);

// Memasukkan data pelanggan ke dalam array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Konversi data ke dalam format yang dapat dibaca DataTables
$output = array(
    "data" => $data
);

// Encode data ke dalam format JSON
echo json_encode($output);
?>