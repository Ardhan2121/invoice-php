<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .ukuran {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
        }
        .warna-biru {
            background-color: darkblue;
        }
        @media print {
            .ukuran {
                margin: 0;
                width: 100%;
            }
            body * {
                visibility: hidden;
            }
            .ukuran, .ukuran * {
                visibility:visible;
            }
            body {
                background-color: white;
            }
        }
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div class="ukuran">
        <div class="row">
            <div class="col-lg-12">

                <div class="card mt-3">
                    <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-end">
                            <strong>Status:</strong> Pending</span> </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="col-4">
                                <h6>From:</h6>
                                <div> <strong>Webz Poland</strong> </div>
                                <div>Madalinskiego 8</div>
                                <div>71-101 Szczecin, Poland</div>
                                <div>Email: info@webz.com.pl</div>
                                <div>Phone: +48 444 666 3333</div>
                            </div>
                            <div class="col-4">
                                <h6>To:</h6>
                                <div> <strong>Bob Mart</strong> </div>
                                <div>Attn: Daniel Marek</div>
                                <div>43-190 Mikolow, Poland</div>
                                <div>Email: marek@daniel.com</div>
                                <div>Phone: +48 123 456 789</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="bg-danger text-white">
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="right">Unit Cost</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left strong">Origin License</td>
                                        <td class="left">Extended License</td>
                                        <td class="right">$999,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$999,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">2</td>
                                        <td class="left">Custom Services</td>
                                        <td class="left">Instalation and Customization (cost per hour)</td>
                                        <td class="right">$150,00</td>
                                        <td class="center">20</td>
                                        <td class="right">$3.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">3</td>
                                        <td class="left">Hosting</td>
                                        <td class="left">1 year subcription</td>
                                        <td class="right">$499,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$499,00</td>
                                    </tr>
                                    <tr>
                                        <td class="center">4</td>
                                        <td class="left">Platinum Support</td>
                                        <td class="left">1 year subcription 24/7</td>
                                        <td class="right">$3.999,00</td>
                                        <td class="center">1</td>
                                        <td class="right">$3.999,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-5">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong>Subtotal</strong></td>
                                            <td class="right text-end">$8.497,00</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Discount (20%)</strong></td>
                                            <td class="right text-end">$1,699,40</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>VAT (10%)</strong></td>
                                            <td class="right text-end">$679,76</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong>Total</strong></td>
                                            <td class="right text-end"><strong>$7.477,36</strong><br>
                                                <strong>0.15050000 BTC</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
</body>

</html>