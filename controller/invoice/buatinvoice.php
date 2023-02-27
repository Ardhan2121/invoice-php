<?php
// Include file koneksi.php
include '../koneksi.php';
require_once 'generatekode.php';

// Baca data JSON yang dikirim dari client
$data = json_decode($_POST['data'], true);
$id = generate_invoice_code();

// Siapkan query untuk memasukkan data ke database
$sql = "INSERT INTO detail_invoice (ID_Invoice, ID_Produk, Jumlah_Produk) VALUES ";

// Buat string values untuk setiap baris data
$values = "";
foreach ($data as $row) {
    $values .= "('" . $id . "', '" . $row[0] . "', '" . $row[3] . "'),";
}

// Hapus koma terakhir
$values = rtrim($values, ",");

// Gabungkan query dan string values
$sql .= $values;

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan ke database!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);