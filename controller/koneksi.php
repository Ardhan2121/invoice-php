<?php
// Konfigurasi koneksi ke database
$host = "localhost"; // Nama host
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi database
$database = "invoice"; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa apakah terjadi kesalahan pada koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
