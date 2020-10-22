<div class="row justify-content-left">
    <div class="col-md-7">
        <div class="card shadow-sm border-bottom-info">
                <div class="card shadow-sm border-left-info">

            <div class="card-header bg-gradient-light py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                            Formulir Tambah Jenis Barang
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('jenis') ?>" class="btn btn-sm btn-primary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-circle-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="nama_jenis">Nama Jenis</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('nama_jenis'); ?>" name="nama_jenis" id="nama_jenis" type="text" class="form-control" placeholder="Masukkan Jenis Barang">
                        <?= form_error('nama_jenis', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-7 offset-md-3">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>