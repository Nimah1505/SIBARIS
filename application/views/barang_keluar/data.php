<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-info">
    <div class="card shadow-sm border-left-info">

    <div class="card-header bg-gradient-light py-1">
        <ul class="list-unstyled list-inline au-breadcrumb__list">
            <li class="list-inline-item active">
                <a href="#">Home</a>
                   </li>
                    <li class="list-inline-item seprate">
                        <span>/</span>
                    </li>
                    <li class="list-inline-item">Transaksi Barang Keluar</li>
        </ul>
      <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Daftar Transaksi Barang Keluar
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('barangkeluar/add') ?>" class="btn btn-sm btn-success btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                    <span class="text">
                       Tambah Transaksi
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-55 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Kode Transaksi Keluar</th>
                    <th>Tanggal Keluar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Keluar</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($barangkeluar) :
                    foreach ($barangkeluar as $bk) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $bk['id_barang_keluar']; ?></td>
                            <td><?= $bk['tanggal_keluar']; ?></td>
                            <td><?= $bk['nama_barang']; ?></td>
                            <td><?= $bk['jumlah_keluar'] . ' ' . $bk['nama_satuan']; ?></td>
                            <td>
                                <a onclick="return confirm('Apakah Anda ingin Menghapus?')" href="<?= base_url('barangkeluar/delete/') . $bk['id_barang_keluar'] ?>" class="btn btn-danger btn-square btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>