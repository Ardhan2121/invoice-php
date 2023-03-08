<?php
// Import koneksi ke database
require_once '../koneksi.php';
// require_once 'generatekode.php';


// Set header response sebagai JSON
header('Content-Type: application/json');

// Ambil data dari POST request
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hakakses = mysqli_real_escape_string($conn, $_POST['hakakses']);

// Modifikasi nilai variabel $password menjadi hash md5
$hashed_password = md5($password);

// Query tambah data karyawan ke database dengan prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO Karyawan (Nama_Karyawan, Username, Password, Hak_Akses) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'ssss', $nama, $username, $hashed_password, $hakakses);
$result = mysqli_stmt_execute($stmt);

// Cek apakah query berhasil dijalankan
if ($result) {
    // Jika berhasil, kirim response berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Berhasil menambahkan data karyawan'
    );
    //update kode karyawan juga

} else {
    // Jika gagal, kirim response gagal
    $response = array(
        'status' => 'error',
        'message' => 'Gagal menambahkan data karyawan'
    );
}

// Kembalikan response sebagai JSON
echo json_encode($response);