<div class="row justify-content-left">
    <div class="col-md-7">
        <div class="card shadow-sm border-bottom-info">
            <div class="card shadow-sm border-left-info">

                  <div class="card-header bg-gradient-light py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                            Formulir Tambah Barang
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('barang') ?>" class="btn btn-sm btn-primary btn-icon-split">
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
                <?= form_open('', [], ['stok' => 0]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="id_barang">Kode Barang</label>
                    <div class="col-md-7">
                        <input readonly value="<?= set_value('id_barang', $id_barang); ?>" name="id_barang" id="id_barang" type="text" class="form-control" placeholder="Masukkan Kode Barang">
                        <?= form_error('id_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="nama_barang">Nama Barang</label>
                    <div class="col-md-7">
                        <input value="<?= set_value('nama_barang'); ?>" name="nama_barang" id="nama_barang" type="text" class="form-control" placeholder="Masukkan Nama Barang">
                        <?= form_error('nama_barang', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="jenis_id">Jenis Barang</label>
                    <div class="col-md-7">
                        <div class="input-group">
                            <select name="jenis_id" id="jenis_id" class="custom-select">
                                <option value="" selected disabled>Pilih Jenis Barang</option>
                                <?php foreach ($jenis as $j) : ?>
                                    <option <?= set_select('jenis_id', $j['id_jenis']) ?> value="<?= $j['id_jenis'] ?>"><?= $j['nama_jenis'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-success" href="<?= base_url('jenis/add'); ?>"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <?= form_error('jenis_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="satuan_id">Satuan</label>
                    <div class="col-md-7">
                        <div class="input-group">
                            <select name="satuan_id" id="satuan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Satuan</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-success" href="<?= base_url('satuan/add'); ?>"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <?= form_error('satuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-7 offset-md-3">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>