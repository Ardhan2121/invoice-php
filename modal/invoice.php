<!-- Modal Pilih Pelanggan -->
<div class="modal fade" id="modalPilihPelanggan" tabindex="-1" aria-labelledby="modalPilihPelangganLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPilihPelangganLabel">Pilih Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="selectPelanggan">Nama Pelanggan</label>
                    <select class="form-control" id="selectPelanggan">
                        <option value="">-- Pilih Pelanggan --</option>
                        <?php
                        // Query untuk mengambil data pelanggan
                        $sql = "SELECT ID_Pelanggan, Nama_Pelanggan, NoTelp_Pelanggan, Email_Pelanggan, Alamat_Pelanggan FROM pelanggan";
                        $result = mysqli_query($conn, $sql);

                        // Loop untuk menampilkan data pelanggan
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['ID_Pelanggan'] . '" data-telp="' . $row['NoTelp_Pelanggan'] . '" data-email="' . $row['Email_Pelanggan'] . '" data-alamat="' . $row['Alamat_Pelanggan'] . '">' . $row['Nama_Pelanggan'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputTelp">No. Telepon</label>
                    <input type="text" class="form-control" id="inputTelp" readonly>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" readonly>
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control" id="inputAlamat" rows="3" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="btnPilihPelanggan">Pilih</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Isi Detail Invoice -->
<div class="modal fade" id="modal-isi-detail-invoice" tabindex="-1" role="dialog"
    aria-labelledby="modal-isi-detail-invoice-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-isi-detail-invoice-label">Isi Detail Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form isi detail invoice -->
                <form id="form-isi-detail-invoice">
                    <div class="form-group">
                        <label for="tanggal-invoice">Tanggal Invoice:</label>
                        <input type="date" class="form-control" id="tanggal-invoice" name="tanggal-invoice">
                    </div>
                    <div class="form-group">
                        <label for="tanggal-jatuh-tempo">Tanggal Jatuh Tempo:</label>
                        <input type="date" class="form-control" id="tanggal-jatuh-tempo" name="tanggal-jatuh-tempo">
                    </div>
                    <div class="form-group">
                        <label for="tambahan-barang">Tambahkan Barang:</label>
                        <input type="text" class="form-control" id="tambahan-barang" name="tambahan-barang">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="btn-simpan-invoice">Simpan</button>
            </div>
        </div>
    </div>
</div>