<?php
// Import koneksi ke database
require_once '../koneksi.php';

// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = mysqli_real_escape_string($conn, $_POST['id']);

// Query cek apakah ada data pelanggan terkait dengan tabel invoice
$check_query = mysqli_prepare($conn, "SELECT COUNT(*) as count FROM invoice WHERE ID_Pelanggan = ?");
mysqli_stmt_bind_param($check_query, 'i', $id);
mysqli_stmt_execute($check_query);
$check_result = mysqli_stmt_get_result($check_query);
$check_row = mysqli_fetch_assoc($check_result);

if ($check_row['count'] > 0) {
    // Jika ada data terkait di tabel invoice, kirim response error
    $response = array(
        'status' => 'error',
        'message' => 'Tidak dapat menghapus data pelanggan karena ada data terkait di tabel invoice'
    );
} else {
    // Jika tidak ada data terkait di tabel invoice, lakukan penghapusan data pelanggan
    // Query hapus data pelanggan dari database dengan prepared statement
    $stmt = mysqli_prepare($conn, "DELETE FROM pelanggan WHERE ID_Pelanggan = ?");
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
}

// Kembalikan response sebagai JSON
echo json_encode($response);
?>