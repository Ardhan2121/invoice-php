<?php
// Fungsi untuk menentukan kode pelanggan terbaru
function generate_pelanggan_code()
{
    global $conn;
    // Query untuk mendapatkan kode pelanggan terbaru
    $query = "SELECT MAX(ID_Pelanggan) AS last_code FROM pelanggan";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($hasil);

    // Menentukan kode pelanggan baru
    if ($data['last_code'] == null) {
        $kode_pelanggan = 1;
    } else {
        $last_code = (int) $data['last_code'];
        $last_code++;
        $kode_pelanggan = $last_code;
    }
    return $kode_pelanggan;
}
?>