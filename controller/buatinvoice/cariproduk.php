<?php
// Koneksi ke database
require '../koneksi.php';

$mysqli = new mysqli($host, $username, $password, $database);

// Ambil data pelanggan dari database berdasarkan id
$idProduk = $_POST['idProduk'];

$query = "SELECT * FROM produk WHERE ID_Produk = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $idProduk);
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $data['nama'] = $row['Nama_Produk'];
  $data['harga'] = $row['Harga_Produk'];
}

// Mengirimkan data pelanggan dalam format JSON ke client
header('Content-Type: application/json');
echo json_encode($data);
?>
