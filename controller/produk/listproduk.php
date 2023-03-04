<?php
// Koneksi ke database
require('../koneksi.php');

// Query untuk mengambil data produk
$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

// Memasukkan data produk ke dalam array
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