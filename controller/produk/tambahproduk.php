<?php
// Import koneksi ke database
require_once '../koneksi.php';
require_once 'generatekode.php';


// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = generate_produk_code();
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$harga = intval($_POST['harga']);

// Query tambah data pelanggan ke database dengan prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO produk (ID_Produk, Nama_Produk, Harga_Produk) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'isi', $id, $nama, $harga);
$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil menambahkan data pelanggan'
    );
    //update kode produk juga

} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menambahkan data pelanggan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);