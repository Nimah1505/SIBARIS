<div class="row">

    <div class="col-xl-4 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-2">Total Data Barang</div>
                        <div class="h5 mb-0 font-weight-bold text-primary-800"><?= $barang; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-archive fa-4x text-primary-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-2">Total Stok Barang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $stok; ?></div>
                            </div>
                            <div class="col-auto">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list-alt fa-4x text-primary-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-2">Total User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-plus fa-4x text-primary-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-4 col-lg-2">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                <i class="fas fa-bars fa-1x text-white-200"></i>
                <h6 class="m-0 font-weight-bold text-white">Transaksi Tahun <?= date('Y'); ?></h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myAreaChart" width="500" height="200" class="chartjs-render-monitor" style="display: block; width: 500px; height: 200px;"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                <i class="fas fa-archive fa-1x text-info-200"></i>
                <h6 class="m-0 font-weight-bold text-white">Transaksi Barang</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Barang Masuk
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Barang Keluar
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow mb-4">
            <div class="card-header bg-warning py-3 d-flex flex-row align-items-center justify-content-between">
                  <i class="fas fa-minus-square fa-1x text-primary-200"></i>
                <h6 class="m-0 font-weight-bold text-danger text-left">Stok Minim</h6>
            </div>
            <div class="table-responsive">
                <table class="table mb-0 text-left table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($barang_min) :
                            foreach ($barang_min as $b) :
                                ?>
                                <tr>
                                    <td><?= $b['nama_barang']; ?></td>
                                    <td><?= $b['stok']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak ada barang stok minim
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>