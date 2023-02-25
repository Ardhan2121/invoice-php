<?php
// Import koneksi ke database
require_once '../koneksi.php';
require_once 'generatekode.php';


// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$id = generate_pelanggan_code();
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$telepon = mysqli_real_escape_string($conn, $_POST['telepon']);

// Query tambah data pelanggan ke database dengan prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO pelanggan (ID_Pelanggan, Nama_Pelanggan, Email_Pelanggan, Alamat_Pelanggan, NoTelp_Pelanggan) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'issss', $id, $nama, $email, $alamat, $telepon);
$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil menambahkan data pelanggan'
    );
    //update kode pelanggan juga

} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menambahkan data pelanggan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);