<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="" href="index.php" aria-expanded="false">
                    <i class="fas fa-columns"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-database"></i>
                    <span class="nav-text">Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="pelanggan.php">Pelanggan</a></li>
                    <li><a href="produk.php">Produk</a></li>
                    <?php if ($_SESSION["role"] == "admin") { ?>
                        <li><a href="karyawan.php">karyawan</a></li>
                    <?php } ?>
                </ul>
            </li>

            <li>
                <a class="" href="invoice.php" aria-expanded="false">
                    <i class="fas fa-file-invoice"></i>
                    <span class="nav-text">Transaksi</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Laporan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="laporan.php">Laporan Penjualan</a></li>
                </ul>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div>
    </div>
</div>