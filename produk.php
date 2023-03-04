<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog"
    aria-labelledby="modalTambahProdukLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahProdukLabel">Tambah Produk Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-produk">
                    <div class="form-group">
                        <label for="nama">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Produk">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Produk</label>
                        <input type="number" class="form-control" id="harga"
                        placeholder="Masukkan Harga Produk">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn light btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Modal Edit Produk -->
<div class="modal fade" id="editProdukModal" tabindex="-1" role="dialog" aria-labelledby="modalEditProdukLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formEditProduk">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditProdukLabel">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="editId" name="id" required>
                    </div>
                    <div class="form-group">
                        <label for="editnama">Nama Produk</label>
                        <input type="text" class="form-control" id="editNama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="editharga">Harga</label>
                        <input type="number" class="form-control" id="editHarga" name="harga" required>
                    </div>
                    <input type="hidden" id="editId" name="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn light btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>