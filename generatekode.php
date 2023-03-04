<?php
// Fungsi untuk menentukan kode produk terbaru
function generate_produk_code()
{
    global $conn;
    // Query untuk mendapatkan kode produk terbaru
    $query = "SELECT MAX(ID_Produk) AS last_code FROM produk";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($hasil);

    // Menentukan kode produk baru
    if ($data['last_code'] == null) {
        $kode_produk = 1;
    } else {
        $last_code = (int) $data['last_code'];
        $last_code++;
        $kode_produk = $last_code;
    }
    return $kode_produk;
}
?>