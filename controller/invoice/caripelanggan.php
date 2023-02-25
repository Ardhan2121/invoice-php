<?php
// Koneksi ke database
require '../koneksi.php';

$mysqli = new mysqli($host, $username, $password, $database);

// Ambil data pelanggan dari database berdasarkan id
$idPelanggan = $_POST['idPelanggan'];

$query = "SELECT * FROM pelanggan WHERE ID_Pelanggan = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $idPelanggan);
$stmt->execute();
$result = $stmt->get_result();

$data = array();
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $data['nama'] = $row['Nama_Pelanggan'];
  $data['email'] = $row['Email_Pelanggan'];
  $data['telepon'] = $row['NoTelp_Pelanggan'];
  $data['alamat'] = $row['Alamat_Pelanggan'];
}

// Mengirimkan data pelanggan dalam format JSON ke client
header('Content-Type: application/json');
echo json_encode($data);
?>
