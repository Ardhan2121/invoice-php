<?php
session_start();
include "koneksi.php";

if (isset($_POST['nama'])) {
    $username = $_SESSION['username'];
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $newpass = md5($_POST['newpassword']);

    // Check if password is correct
    $stmt = $conn->prepare("SELECT * FROM karyawan WHERE Username=? AND Password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 0) {
        $pesan = "Password salah.";
        http_response_code(400);
    } else {
        $stmt = $conn->prepare("UPDATE karyawan SET Nama_Karyawan=?, Password=? WHERE Username=?");
        $stmt->bind_param("sss", $nama, $newpass, $username);
        $stmt->execute();
        $pesan = "Berhasil";
        $_SESSION['nama'] = $nama;
    }
    echo $pesan;
}
?>