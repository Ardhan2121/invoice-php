<?php
require '../koneksi.php';

$idProduk = $_POST['id_produk'];

$query = "SELECT Harga_Produk FROM produk WHERE ID_Produk = '$idProduk'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $harga = $row['Harga_Produk'];

    $response = [
        'success' => true,
        'harga' => $harga
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    $response = [
        'success' => false,
        'message' => 'Data tidak ditemukan'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}
