<?php
ob_start();
require 'controller/koneksi.php';
$id = $_GET['id'];

//query untuk mengambil data invoice dan pelanggan
$query = "SELECT * FROM invoice JOIN pelanggan ON invoice.id_pelanggan = pelanggan.id_pelanggan WHERE invoice.id_invoice = $id";
$data = mysqli_query($conn, $query);
$invoice = mysqli_fetch_assoc($data);

//query untuk mengambil data detail invoice
$query = "SELECT detail_invoice.*, produk.*, detail_invoice.Jumlah_Produk * detail_invoice.Harga_Jual AS Total_Harga
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


?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Invoice #:
                                <?php echo $invoice['ID_Invoice']; ?><br />
                                Created:
                                <?php echo $invoice['Tanggal_Invoice']; ?><br />
                                Due:
                                <?php echo $invoice['Tanggal_JatuhTempo']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Sparksuite, Inc.<br />
                                12345 Sunny Road<br />
                                Sunnyville, CA 12345
                            </td>

                            <td>
                                <?php echo $invoice['Nama_Pelanggan']; ?><br />
                                <?php echo $invoice['NoTelp_Pelanggan']; ?><br />
                                <?php echo $invoice['Email_Pelanggan']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Produk</td>
                <td>Harga</td>
                <td>QTY</td>
                <td>Total</td>
            </tr>

            <?php while ($detailinvoice = mysqli_fetch_array($data)) { ?>
                <tr class="item">
                    <td>
                        <?php echo $detailinvoice['Nama_Produk']; ?>
                    </td>
                    <td>
                        <?php echo rupiah($detailinvoice['Harga_Jual']); ?>
                    </td>
                    <td>
                        <?php echo $detailinvoice['Jumlah_Produk']; ?>
                    </td>
                    <td>
                        <?php echo rupiah($detailinvoice['Total_Harga']); ?>
                    </td>
                </tr>
            <?php }
            ; ?>
            <tr class="total">
                <td colspan="3"></td>

                <td>Subtotal:
                    <?php echo rupiah($invoice['Subtotal']); ?>
                </td>
            </tr>
            <tr class="total">
                <td colspan="3"></td>

                <td>PPN:
                    <?php echo $invoice['Pajak']; ?>%
                </td>
            </tr>
            <tr class="total">
                <td colspan="3"></td>

                <td>Diskon:
                    <?php echo $invoice['Diskon']; ?>%
                </td>
            </tr>
            <tr class="total">
                <td colspan="3"></td>

                <td>Total:
                    <?php echo rupiah($invoice['Total']); ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$html = ob_get_clean();
$dompdf->loadHtml($html);


$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

// Display PDF in browser
header('Content-Type: application/pdf');
echo $dompdf->output();