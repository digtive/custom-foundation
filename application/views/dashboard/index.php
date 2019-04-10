    <?php if ($this->session->flashdata('alert') === 'welcome'): ?>
        <div class="col-12">
            <div class="alert alert-success animated fadeInDown alert-box" role="alert">
                <h3 class="font-weight-light">
                    <i class="icon-puzzle"></i>
                    Selamat Datang <?= $this->session->userdata('sess_user');?>
                </h3>
            </div>
        </div>
    <?php endif;?>

    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-account-card-details icon-lg text-success"></i>
                    <div class="ml-3">
                        <p class="mb-0">Pendaftar</p>
                        <h6>12569</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-archive icon-lg text-primary"></i>
                    <div class="ml-3">
                        <p class="mb-0">Arsip</p>
                        <h6>2346</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-account-check icon-lg text-info"></i>
                    <div class="ml-3">
                        <p class="mb-0">Admin</p>
                        <h6>3</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                    <div class="ml-3">
                        <p class="mb-0">Bulan Ini</p>
                        <h6>30 Pendaftar</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h3 class="font-weight-light">Status Kelengkapan Pendaftar</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Nama Pendaftar
                            </th>
                            <th>
                                Kelengkapan Dokumen
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Tanggal Daftar
                            </th>
                            <th class="text-center text-primary">
                                <i class="icon-settings "></i>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Adi Baskara
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
                                14 maret, 2019
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Messsy Adam
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
                               2 Februari, 2019
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Junaidi
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-success">lengkap</label>
                            </td>
                            <td>
                                3 Januari, 2015
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                Ali Usman
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
                                12 Januari, 2019
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                Henri Saputra
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-info">menunggu</label>
                            </td>
                            <td>
                                10 Februari, 2019
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                Adam Saputra
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <label class="badge badge-danger">belum melengkapi</label>
                            </td>
                            <td>
                                25 Februari, 2019
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary">tampilkan</button>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

