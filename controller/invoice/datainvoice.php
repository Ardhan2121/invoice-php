<?php
// Mulai session
session_start();
include '../koneksi.php';
include 'generatekode.php';

// Cek apakah ada input POST yang dikirimkan
if (isset($_POST['tanggalInvoice']) || isset($_POST['tanggalJatuhTempo'])) {

    // Tetapkan nilai session dari input POST
    $_SESSION['tanggalInvoice'] = $_POST['tanggalInvoice'];
    $_SESSION['tanggalJatuhTempo'] = $_POST['tanggalJatuhTempo'];
    $_SESSION['IdInvoice'] = generate_invoice_code();

    // Cetak nilai session untuk memeriksa apakah berhasil disimpan
    echo 'Data session berhasil disimpan:';
    echo '<br>Tanggal invoice: ' . $_SESSION['tanggalInvoice'];
    echo '<br>Tanggal jatuh tempo: ' . $_SESSION['tanggalJatuhTempo'];

} else {
    // Jika tidak ada input POST yang dikirimkan, cetak pesan kesalahan
    echo 'Data POST tidak ditemukan';
}

if (isset($_POST['idPelanggan'])) {
    $_SESSION['pelanggan'] = array(
        'id' => $_POST['idPelanggan'],
        'nama' => $_POST['namaPelanggan'],
        'email' => $_POST['emailPelanggan'],
        'telepon' => $_POST['teleponPelanggan'],
        'alamat' => $_POST['alamatPelanggan']
    );
}
?>