<?php
// Import koneksi ke database
require_once '../koneksi.php';

// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$harga= mysqli_real_escape_string($conn, $_POST['harga']);

// Query update data pelanggan ke database dengan prepared statement
$stmt = mysqli_prepare($conn, "UPDATE produk SET Nama_Produk=?, Harga_Produk=? WHERE ID_Produk=?");
mysqli_stmt_bind_param($stmt, 'sii', $nama, $harga, $id);

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