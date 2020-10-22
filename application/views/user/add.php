<div class="row justify-content-left">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-info">
            <div class="card shadow-sm border-left-info">

            <div class="card-header bg-gradient-light py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                            Formulir Tambah User
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('user') ?>" class="btn btn-sm btn-primary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="username">Username</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('username'); ?>" type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username">
                        <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="password">Password</label>
                    <div class="col-md-7">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password">
                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="password2">Konfirmasi Password</label>
                    <div class="col-md-7">
                        <input type="password" id="password2" name="password2" class="form-control" placeholder=" Masukkan Konfirmasi Password">
                        <?= form_error('password2', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="nama">Nama Lengkap</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('nama'); ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="email">Email</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('email'); ?>" type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="no_telp">Nomor Telepon</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('no_telp'); ?>" type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon">
                        <?= form_error('no_telp', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="role">Role</label>
                    <div class="col-md-7">
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('role', 'admin'); ?> value="admin" type="radio" id="admin" name="role" class="custom-control-input">
                            <label class="custom-control-label" for="admin">Admin</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('role', 'gudang'); ?> value="gudang" type="radio" id="gudang" name="role" class="custom-control-input">
                            <label class="custom-control-label" for="gudang">Pegawai</label>
                        </div>
                        <?= form_error('role', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-7">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-danger">
                            Reset
                        </button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>