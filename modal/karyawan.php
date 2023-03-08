<!-- Modal Tambah Karyawan -->
<div class="modal fade" id="modalTambahKaryawan" tabindex="-1" role="dialog" aria-labelledby="modalTambahKaryawanLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahKaryawanLabel">Tambah Karyawan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-karyawan">
                    <div class="form-group">
                        <label for="nama">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="Masukkan Email Karyawan">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Masukkan alamat Karyawan">
                    </div>
                    <div class="form-group">
                        <label for="hakakses">Hak Akses</label>
                        <select class="default-select  form-control wide" name="hakAkses" id="hakakses">
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                        </select>
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