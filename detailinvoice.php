<html data-kantu="1">
<?php
require 'controller/koneksi.php';
if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
  $id = $_GET['id'];
  //query untuk mengambil data invoice dan pelanggan
  $query = "SELECT *, subtotal * (Diskon/100) as Total_Diskon, subtotal * (Pajak/100) as Total_Pajak FROM invoice JOIN pelanggan ON invoice.id_pelanggan = pelanggan.id_pelanggan WHERE invoice.id_invoice = $id";
  $data = mysqli_query($conn, $query);
  $invoice = mysqli_fetch_assoc($data);

  //query untuk mengambil data detail invoice
  $query = "SELECT detail_invoice.*, produk.*, detail_invoice.Harga_Jual - detail_invoice.Harga_Promo AS Total_Diskon
    FROM detail_invoice
    JOIN produk ON detail_invoice.ID_Produk = produk.ID_Produk
    WHERE detail_invoice.id_invoice = $id;
    ";
  $data = mysqli_query($conn, $query);

  function rupiah($number)
  {
    $rupiah = "Rp " . number_format($number, 0, ',', '.');
    return $rupiah;
  }
} else {
  header('Location: 500.html');
}
?>


<head>
  <meta charset="utf-8" />
  <style>
    body {
      font-family: poppins;
      padding: 0;
      margin: 0;
    }

    #invoice {
      width: 210mm;
      padding: 15px;
      margin: 0 auto;
    }

    #billship,
    #company,
    #items {
      width: 100%;
      border-collapse: collapse;
    }

    #company td,
    #billship td,
    #items td,
    #items th {
      padding: 15px;
    }

    #company,
    #billship {
      margin-bottom: 30px;
    }

    #company img {
      max-width: 180px;
      height: auto;
    }

    #bigi {
      font-size: 45px;
      font-weight: 700;
      color: #0083bb;
    }

    #billship {
      background: #0083bb;
      color: #fff;
    }

    #billship td {
      width: 33%;
    }

    #items th {
      text-align: left;
      border-top: 2px solid hsl(198, 100%, 60%);
      border-bottom: 2px solid hsl(198, 100%, 89%);
    }

    #items td {
      border-bottom: 2px solid hsl(198, 100%, 89%);
    }

    .idesc {
      color: #ca3f3f;
    }

    .ttl {
      font-weight: 700;
    }

    .right {
      text-align: right;
    }

    #notes {
      margin-top: 30px;
      font-size: 0.95em;
    }
  </style>
</head>

<body>
  <?php if (!isset($id)) {
    header("Location: 500.html");
  } ?>

  <div id="invoice">
    <!-- (A) HEADER -->
    <table id="company">
      <tbody>
        <tr>
          <td><img src="images/logo.png" /></td>
          <td class="right">
            <div>Company Name</div>
            <div>Street Address, City, State, Zip</div>
            <div>Phone: xxx-xxx-xxx | Fax: xxx-xxx-xxx</div>
            <div>https://your-site.com</div>
            <div>doge@your-site.com</div>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- (B) BILL TO, SHIP TO, INVOICE INFO -->
    <div id="bigi">TAGIHAN</div>
    <table id="billship">
      <tbody>
        <tr>
          <td>
            <strong>Data Pelanggan</strong><br />
            <?php echo $invoice['Nama_Pelanggan']; ?>
            (
            <?php echo $invoice['NoTelp_Pelanggan']; ?>)<br />
            <?php echo $invoice['Email_Pelanggan']; ?><br />
            <?php echo $invoice['Alamat_Pelanggan']; ?><br />
          </td>
          <td></td>
          <td>
            <strong>Data Invoice</strong><br />
            No Invoice:
            <?php echo $invoice['ID_Invoice']; ?><br /><strong>Dibuat:</strong>
            <?php echo $invoice['Tanggal_Invoice']; ?><br /><strong>Jatuh Tempo:</strong> CB-789-123
            <?php echo $invoice['Tanggal_JatuhTempo']; ?><br />
          </td>
        </tr>
      </tbody>
    </table>

    <!-- (C) ITEMS & TOTALS -->
    <table id="items">
      <tbody>
        <tr>
          <th>Produk</th>
          <th>Harga Awal</th>
          <th>Diskon</th>
          <th>Harga Promo</th>
        </tr>
        <?php while ($detailinvoice = mysqli_fetch_array($data)) { ?>
          <tr>
            <td>
              <div>
                <?php echo $detailinvoice['Nama_Produk']; ?>
              </div>
            </td>
            <td>
              <?php echo rupiah($detailinvoice['Harga_Jual']); ?>
            </td>
            <td>
              <?php echo rupiah($detailinvoice['Total_Diskon']); ?>
            </td>
            <td>
              <?php echo rupiah($detailinvoice['Harga_Promo']); ?>
            </td>
          </tr>
        <?php }
        ; ?>
        <tr class="ttl">
          <td class="right" colspan="3">SUBTOTAL</td>
          <td>
            <?php echo rupiah($invoice['Subtotal']); ?>
          </td>
        </tr>
        <tr class="ttl">
          <td class="right" colspan="3">DISKON
            <?php echo $invoice['Diskon']; ?>%
          </td>
          <td>
            -
            <?php echo rupiah($invoice['Total_Diskon']); ?>
          </td>
        </tr>
        <tr class="ttl">
          <td class="right" colspan="3">PAJAK
            <?php echo $invoice['Pajak']; ?>%
          </td>
          <td>
            +
            <?php echo rupiah($invoice['Total_Pajak']); ?>
          </td>
        </tr>
        <tr class="ttl">
          <td class="right" colspan="3">TOTAL</td>
          <td>
            <?php echo rupiah($invoice['Total']); ?>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- (D) NOTES -->
    <div id="notes">Cheques should be made payable to Code Boxx<br />Get a 10% off with the next purchase with discount
      code DOGE1234!<br /></div>
  </div>

  <script>
  </script>
</body>

</html>