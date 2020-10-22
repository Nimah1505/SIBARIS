<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-info">
    <div class="card shadow-sm border-left-info">

    <div class="h6 card-header m-0 bg-gradient-light py-1">
        <ul class="list-unstyled list-inline au-breadcrumb__list">
            <li class="list-inline-item active">
                <a href="#">Home</a>
                   </li>
                    <li class="list-inline-item seprate">
                        <span>/</span>
                    </li>
                    <li class="list-inline-item">Kelola User</li>
        </ul>
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Daftar User
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('user/add') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    <span class="text">
                        Tambah User
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="15">No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($users) :
                    foreach ($users as $user) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['no_telp']; ?></td>
                                <td>
                                <a href="<?= base_url('user/toggle/') . $user['id_user'] ?>" class="btn btn-square btn-sm <?= $user['is_active'] ? 'btn-primary' : 'btn-warning' ?>" title="<?= $user['is_active'] ? 'Nonaktifkan User' : 'Aktifkan User' ?>"><i class="fa fa-fw fa-power-off"></i></a>
                                <a href="<?= base_url('user/edit/') . $user['id_user'] ?>" class="btn btn-square btn-sm btn-info"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('user/delete/') . $user['id_user'] ?>" class="btn btn-circlesquare btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;
                    else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan user baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>