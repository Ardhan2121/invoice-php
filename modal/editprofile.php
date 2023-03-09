<!-- Modal Tambah Pelanggan -->
<?php session_start(); ?>
<div class="modal fade" id="modalEditProfile" tabindex="-1" role="dialog" aria-labelledby="modalEditProfileLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditProfileLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit-profile">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama-profil" value="<?php echo $_SESSION['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" readonly
                            value="<?php echo $_SESSION['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password Lama</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password Lama">
                    </div>
                    <div class="form-group">
                        <label for="password-baru">Password Baru</label>
                        <input type="text" class="form-control" name="newpassword" id="newpassword" placeholder="Masukkan Password Baru">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn light btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>