<?php
// Import koneksi ke database
require_once '../koneksi.php';

// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = mysqli_real_escape_string($conn, $_POST['id']);

// Query hapus data pelanggan dari database dengan prepared statement
$stmt = mysqli_prepare($conn, "DELETE FROM produk WHERE ID_Produk = ?");
mysqli_stmt_bind_param($stmt, 'i', $id);
$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil menghapus data pelanggan'
    );
} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menghapus data pelanggan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);
?>