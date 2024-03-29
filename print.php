<?php
session_start();
include 'partials/logstate.php';
require 'controller/koneksi.php';

if (empty($_POST['StartDate'])) {
  //query untuk mengambil data detail invoice
  $query = "SELECT pelanggan.ID_Pelanggan, pelanggan.Nama_Pelanggan, invoice.Tanggal_Invoice, invoice.Total, invoice.ID_Invoice FROM pelanggan INNER JOIN invoice ON pelanggan.ID_Pelanggan = invoice.ID_Pelanggan WHERE pelanggan.ID_Pelanggan = invoice.ID_Pelanggan ORDER BY Tanggal_Invoice ASC";
} else {
  $start = $_POST['StartDate'];
  $to = $_POST['ToDate'];
  $query = "SELECT pelanggan.ID_Pelanggan, pelanggan.Nama_Pelanggan, invoice.Tanggal_Invoice, invoice.Total, invoice.ID_Invoice FROM pelanggan INNER JOIN invoice ON pelanggan.ID_Pelanggan = invoice.ID_Pelanggan WHERE pelanggan.ID_Pelanggan = invoice.ID_Pelanggan AND Tanggal_Invoice BETWEEN '$start' and '$to' ORDER BY Tanggal_Invoice ASC";
}

$result = mysqli_query($conn, $query);

// Memasukkan data pelanggan dan invoice ke dalam array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

function rupiah($number)
{
  $rupiah = "Rp " . number_format($number, 0, ',', '.');
  return $rupiah;
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Site Title -->
  <title>General Purpose Invoice</title>
  <link rel="stylesheet" href="css/laporan.css">
</head>

<body>
  <div class="tm_container">
    <div class="tm_invoice_wrap">
      <div class="tm_invoice tm_style1" id="tm_download_section">
        <div class="tm_invoice_in">
          <div class="tm_invoice_head tm_align_center tm_mb20">
            <div class="tm_invoice_left">
              <div class="tm_logo"><img src="images/logo.png" alt="Logo"></div>
            </div>
            <div class="tm_invoice_right tm_text_right">
              <div class="tm_primary_color tm_f50 tm_text_uppercase">Laporan Penjualan</div>
            </div>
          </div>
          <div class="tm_invoice_info tm_mb20">
            <div class="tm_invoice_seperator tm_gray_bg"></div>
            <div class="tm_invoice_info_list">
              <p class="tm_invoice_number tm_m0">From:<b class="tm_primary_color"><?php echo $start; ?></b></p>
              <p class="tm_invoice_date tm_m0">To: <b class="tm_primary_color"><?php echo $to; ?></b></p>
            </div>
          </div>
          <div class="tm_table tm_style1 tm_mb30">
            <div class="tm_round_border">
              <div class="tm_table_responsive">
                <table>
                  <thead>
                    <tr>
                      <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg">Tanggal Invoice</th>
                      <th class="tm_width_3 tm_semi_bold tm_primary_color tm_gray_bg">ID Invoice</th>
                      <th class="tm_width_4 tm_semi_bold tm_primary_color tm_gray_bg">Nama Pelanggan</th>
                      <th class="tm_width_2 tm_semi_bold tm_primary_color tm_gray_bg tm_text_right">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $total = 0;
                    foreach ($data as $row): ?>
                      <tr>
                        <td class="tm_width_3">
                          <?php echo $row['Tanggal_Invoice']; ?>
                        </td>
                        <td class="tm_width_3">
                          <?php echo $row['ID_Invoice']; ?>
                        </td>
                        <td class="tm_width_3">
                          <?php echo $row['Nama_Pelanggan']; ?>
                        </td>
                        <td class="tm_width_2 tm_text_right">
                          <?php echo rupiah($row['Total']); ?>
                        </td>
                        <?php $total += $row['Total']; ?>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="tm_invoice_footer">
              <div class="tm_left_footer">
              </div>
              <div class="tm_right_footer">
                <table>
                  <tbody>
                    <tr class="tm_border_top tm_border_bottom">
                      <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_primary_color">Total Pendapatan </td>
                      <td class="tm_width_3 tm_border_top_0 tm_bold tm_f16 tm_primary_color tm_text_right">
                        <?php echo rupiah($total); ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm_invoice_btns tm_hide_print">
        <a href="javascript:window.print()" class="tm_invoice_btn tm_color1">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path
                d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
              <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor"
                stroke-linejoin="round" stroke-width="32" />
              <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
              <circle cx="392" cy="184" r="24" fill='currentColor' />
            </svg>
          </span>
          <span class="tm_btn_text">Print</span>
        </a>
        <button id="tm_download_btn" class="tm_invoice_btn tm_color2">
          <span class="tm_btn_icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
              <path
                d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
            </svg>
          </span>
          <span class="tm_btn_text">Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jspdf.min.js"></script>
  <script src="assets/js/html2canvas.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>