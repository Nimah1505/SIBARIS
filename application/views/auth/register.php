<!-- Outer Row -->
<div class="row justify-content-center mt-5 t-lg-5">

    <div class="col-xl-6 col-lg-10 col-md-4">

        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-lg-12 p-10">
                <div class="col-xl-5 col-lg-4 col-md-4 d-lg-block bg-register-image" alt="SIBARIS"></div>
                <div class="p-9">
                    <div class="outter-form-login">
                        <div class="logo-login">
                            <em class="glyphicon glyphicon-user"></em>
                        </div>
                    <div class="text-center mb-3">
                        <h1 class="h4 text-gray-900">Buat Akun SIBARIS</h1>
                        <span class="text-muted">Form Data Diri</span>
                    </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open('', ['class' => 'user']); ?>
                    <div class="form-group">
                        <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Nama Pengguna">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password2" class="form-control form-control-user" placeholder="Konfirmasi">
                                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input value="<?= set_value('nama'); ?>" type="text" name="nama" class="form-control form-control-user" placeholder="Nama Lengkap">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                            <div class="form-group">
                                <input value="<?= set_value('email'); ?>" type="text" name="email" class="form-control form-control-user" placeholder="Alamat Email">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input value="<?= set_value('no_telp'); ?>" type="text" name="no_telp" class="form-control form-control-user" placeholder="Nomor Telepon Aktif">
                                <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                    <button type="submit" class="btn btn-success btn-user btn-block">
                        DAFTAR
                    </button>
                    <div class="text-center mt-4">
                        <a class="bold" href="<?= base_url('auth') ?>">Login Saja</a>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>

    </div>
</div>