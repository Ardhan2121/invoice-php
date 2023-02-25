<?php
// Import koneksi ke database
require_once '../koneksi.php';

// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

// Query update data pelanggan ke database dengan prepared statement
$stmt = mysqli_prepare($conn, "UPDATE pelanggan SET Nama_Pelanggan=?, Email_Pelanggan=?, Alamat_Pelanggan=?, NoTelp_Pelanggan=? WHERE ID_Pelanggan=?");
mysqli_stmt_bind_param($stmt, 'ssssi', $nama, $email, $alamat, $telepon, $id);

$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil mengubah data pelanggan'
    );
} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal mengubah data pelanggan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);
?>