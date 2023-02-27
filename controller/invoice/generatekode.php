<?php
// Fungsi untuk menentukan kode pelanggan terbaru
function generate_invoice_code()
{
    global $conn;
    // Query untuk mendapatkan kode pelanggan terbaru
    $query = "SELECT MAX(ID_Invoice) AS last_code FROM invoice";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($hasil);

    // Menentukan kode pelanggan baru
    if ($data['last_code'] == null) {
        $kode_invoice = 1;
    } else {
        $last_code = (int) $data['last_code'];
        $last_code++;
        $kode_invoice = $last_code;
    }
    return $kode_invoice;
}
?>