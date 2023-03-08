<?php
// Import koneksi ke database
require_once '../koneksi.php';

// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$username = mysqli_real_escape_string($conn, $_POST['username']);

// Query hapus data karyawan dari database dengan prepared statement
$stmt = mysqli_prepare($conn, "DELETE FROM karyawan WHERE Username = ?");
mysqli_stmt_bind_param($stmt, 's', $username);
$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil menghapus data karyawan'
    );
} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menghapus data karyawan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);
?>