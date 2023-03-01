<!-- Modal Tambah Pelanggan -->
<div class="modal fade" id="modalTambahPelanggan" tabindex="-1" role="dialog"
    aria-labelledby="modalTambahPelangganLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPelangganLabel">Tambah Karyawan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-pelanggan">
                    <div class="form-group">
                        <label for="nama">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Karyawan</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email Pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat Pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control telepon" id="telepon"
                            placeholder="Masukkan Nomor Telepon Pelanggan">
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

<!-- Modal Edit Pelanggan -->
<div class="modal fade" id="editPelangganModal" tabindex="-1" role="dialog" aria-labelledby="modalEditPelangganLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formEditPelanggan">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditPelangganLabel">Edit Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="editId" name="EditId" required>
                    </div>
                    <div class="form-group">
                        <label for="editNama">Nama Karyawan</label>
                        <input type="text" class="form-control" id="editNama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Username</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="editAlamat">Password</label>
                        <input type="password" class="form-control" id="editAlamat" name="Alamat" required>
                    </div>
                    <label>Hak Akses</label>
          <div class="form-group">
            <select id="" class="default-select form-control wide mb-3" name="HakAkses" value="">
              <option>Admin</option>
              <option>Karyawan</option>
           </select>
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

