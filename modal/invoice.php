<!-- modal info invoice -->
<div class="modal fade" id="modalInfoInvoice" tabindex="-1" role="dialog" aria-labelledby="modalInfoInvoiceLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInfoInvoiceLabel">Info Invoice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-2">
                    <label for="inputJatuhTempo">Tanggal Invoice</label>
                    <input class="datepicker-default form-control" data-value="<?php echo date('Y-m-d'); ?>"
                        id="TanggalInvoice">
                </div>
                <div class="form-group" id="divTanggalManual">
                    <label for="inputTanggalManual">Tanggal Jatuh Tempo (opsional)</label>
                    <input class="datepicker-default form-control" id="TanggalJatuhTempo">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn light btn-danger" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="btnLanjut" data-bs-dismiss="modal">Lanjut</button>
            </div>
        </div>
    </div>
</div>

<!-- modal pilih pelanggan -->
<div class="modal fade" id="modalPilihPelanggan" tabindex="-1" role="dialog" aria-labelledby="modalPilihPelangganLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPilihPelangganLabel">Pilih Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="inputIdPelanggan">ID Pelanggan</label>
                    <select class="default-select form-control wide" id="inputIdPelanggan" name="id_pelanggan">
                        <option value="">Pilih ID Pelanggan</option>
                        <?php
                        // Koneksi ke database
                        include "controller/koneksi.php";

                        // Query untuk mengambil data pelanggan
                        $query = "SELECT ID_Pelanggan, Nama_Pelanggan FROM pelanggan";

                        // Eksekusi query
                        $result = mysqli_query($conn, $query);

                        // Looping untuk menampilkan data pelanggan
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=\"" . $row['ID_Pelanggan'] . "\">" . $row['ID_Pelanggan'] . " (" . $row['Nama_Pelanggan'] . ")</option>";
                        }

                        // Tutup koneksi ke database
                        mysqli_close($conn);
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputNamaPelanggan">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="inputNamaPelanggan" name="nama_pelanggan" readonly>
                </div>
                <div class="form-group">
                    <label for="inputEmailPelanggan">Email Pelanggan</label>
                    <input type="email" class="form-control" id="inputEmailPelanggan" name="email_pelanggan" readonly>
                </div>
                <div class="form-group">
                    <label for="inputTeleponPelanggan">Telepon Pelanggan</label>
                    <input type="text" class="form-control" id="inputTeleponPelanggan" name="telepon_pelanggan"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="inputAlamatPelanggan">Alamat Pelanggan</label>
                    <textarea class="form-control" id="inputAlamatPelanggan" name="alamat_pelanggan" rows="3"
                        readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn light btn-danger" id="kembaliStep1"
                    data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary" id="btnLanjut2" data-bs-dismiss="modal"
                    disabled>Lanjut</button>
            </div>
        </div>
    </div>
</div>