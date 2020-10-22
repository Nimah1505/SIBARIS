<!-- Outer Row -->
<div class="row justify-content-center mt-5 t-lg-5">

    <div class="col-xl-5 col-lg-4 col-md-4">

        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-lg-12 p-10">
                <div class="col-xl-5 col-lg-4 col-md-4 d-lg-block bg-login-image" alt="SIBARIS"></div>
                <div class="p-10">
                    <div class="text-center mb-3">
                        <i class="fa fa-cube"></i>
                        <h1 class="h3 text-gray-800">Selamat Datang di SIBARIS</h1>
                                <span class="text-muted">Silahkan Masuk</span>
                            </div><br>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-info btn-user btn-block">
                                MASUK
                            </button>
                            <div class="text-center mt-4">
                                <a class="small" href="<?= base_url('register') ?>">Daftar SIBARIS</a>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>