!-- modal pilih pelanggan -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog" aria-labelledby="modalTambahProdukLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahProdukLabel">Pilih Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputIdProduk">ID Produk</label>
                    <select class="default-select form-control wide" id="inputIdProduk" name="id_Produk">
                        <option value="">Pilih ID Produk</option>
                        <?php
                        // Koneksi ke database
                        include "controller/koneksi.php";

                        // Query untuk mengambil data Produk
                        $query = "SELECT ID_Produk, Nama_Produk FROM Produk";

                        // Eksekusi query
                        $result = mysqli_query($conn, $query);

                        // Looping untuk menampilkan data pelanggan
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['ID_Produk'] . "\">" . $row['ID_Produk'] . " (" . $row['Nama_Produk'] . ")</option>";
                        }

                        // Tutup koneksi ke database
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputNamaProduk">Nama Produk</label>
                    <input type="text" class="form-control" id="inputNamaProduk" name="nama_Produk" readonly>
                </div>
                <div class="form-group">
                    <label for="inputHargaProduk">Harga Produk</label>
                    <input type="text" class="form-control" id="inputHargaProduk" name="harga_Produk" readonly>
                </div>
                <div class="form-group">
                    <label for="inputQtyProduk">QTY Produk</label>
                    <input type="number" class="form-control" id="inputQtyProduk" value="1" min="1" name="qty_Produk">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn light btn-danger" id="kembaliStep1"
                    data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary" id="btntambah" data-bs-dismiss="modal"
                    disabled>Lanjut</button>
            </div>
        </div>
    </div>
</div>