<?php
    $admin_name  = $this->session->userdata('sess_user');
    $admin_level = $this->session->userdata('sess_level');
    $admin_id    = $this->session->userdata('sess_id');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> <?= $title; ?> </title>
        
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
        <!-- endinject -->
        
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?= site_url()?>assets/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
        <!-- End plugin css for this page -->
        
        <!-- inject:css -->
        <link rel="stylesheet" href="<?= site_url()?>assets/css/style.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/master.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/animate.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/easy-autocomplete.min.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/easy-autocomplete.themes.min.css">
        <link rel="stylesheet" href="<?= site_url()?>assets/css/dropify.min.css">
        <!-- endinject -->
        
        <link rel="shortcut icon" href="<?= site_url()?>assets/images/favicon.png" />
    
    </head>

    <body class="<?= $menu?>">
    
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row d-print-none" >
            
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="<?= site_url()?>">
                    <span style="color: #ffffff">SIMRP</span>
                </a>
                <a class="navbar-brand brand-logo-mini" href="<?= base_url();?>" style="color: black;">
                    <i class="icon-book-open text-white"></i>
                </a>
            </div>
            
            <div class="navbar-menu-wrapper d-flex align-items-center">
                
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            
            </div>
        </nav>
        
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="row row-offcanvas row-offcanvas-right">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas d-print-none  " id="sidebar">
                    <ul class="nav">
                        
                        <li class="nav-item nav-profile mt-2">
                            <div class="nav-link">
                                <div class="profile-image">
                                    <img src="<?= site_url()?>assets/images/profil.png" alt="image"/>
<!--                                    <span class="online-status online"></span>-->
                                    <!--change class online to offline or busy as needed-->
                                </div>
                                <div class="profile-name">
                                    <p class="name text-white">
                                        <?= ucfirst($admin_name )?>
                                    </p>
                                    <p class="designation">
                                        <?= ucfirst($admin_level) ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard')?>">
                                <i class="icon-grid menu-icon text-white" ></i>
                                <span class="menu-title text-white">Dashboard</span>
                                <!-- <span class="badge badge-success">New</span>-->
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#berkas-menu" aria-expanded="false" aria-controls="berkas-menu">
                                <i class="icon-book-open menu-icon text-white"></i>
                                <span class="menu-title text-white">Berkas </span>
                            </a>
                            <div class="collapse" id="berkas-menu">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item d-none d-lg-block">
                                        <a class="nav-link text-white" href="<?= site_url('berkas/persyaratan')?>">Persyaratan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= site_url('berkas/'.$admin_name)?>">Berkas Saya</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= site_url('berkas/unggah/'.$admin_name)?>">Lengkapi Berkas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= site_url('berkas/riwayat/'.$admin_name)?>">Riwayat Pengisian</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#pendaftar-menu" aria-expanded="false" aria-controls="pendaftar-menu">
                                <i class="icon-user menu-icon text-white"></i>
                                <span class="menu-title text-white">Pendaftar </span>
                            </a>
                            <div class="collapse" id="pendaftar-menu">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item d-none d-lg-block">
                                        <a class="nav-link text-white" href="<?= site_url('pendaftar')?>">Pendaftar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= site_url('pendaftar/berkas')?>">Kelengkapan Syarat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= site_url('pendaftar/syarat')?>">Berkas Pendaftar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                                <i class="icon-calendar menu-icon text-white"></i>
                                <span class="menu-title text-white">Jadwal </span>
                            </a>
                            <div class="collapse" id="page-layouts">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item d-none d-lg-block">
                                        <a class="nav-link text-white" href="<?= site_url('jadwal')?>">Daftar Jadwal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">Terlaksana</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#laporan-menu" aria-expanded="false" aria-controls="laporan-menu">
                                <i class="icon-docs menu-icon text-white"></i>
                                <span class="menu-title text-white">Laporan </span>
                            </a>
                            <div class="collapse" id="laporan-menu">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item d-none d-lg-block">
                                        <a class="nav-link text-white" href="#">Akta Nikah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">Pemeriksaan Nikah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="nav-item p-2">
                            <button  class="btn btn-sm btn-danger col-12" data-toggle="modal" data-target="#keluarModal">
                                <?php if ($menu === ''):?>
                                    <h5><i class="icon icon-logout"></i> keluar</h5>
                                <?php else: ?>
                                    <h5><i class="icon icon-logout"></i> </h5>
                                <?php endif;?>
                            </button>
                        </li>
                    </ul>
                </nav>
                
                <!-- Modal keluar dari sistem -->
                <div class="modal fade" id="keluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar dari SIMRP ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">batalkan</button>
                                <a href="<?= site_url('logout')?>"  class="btn btn-primary">lanjutkan</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- partial -->
                <div class="content-wrapper">
                    <div class="row mb-4">
                        <?php
                            switch ($this->session->flashdata('alert')){
                                case 'insert':
                        ?>
                                    <div class="col-12">
                                        <div class="alert alert-success animated fadeInDown alert-box" role="alert">
                                            <h3 class="font-weight-light"> <i class="icon-plus"></i> Berhasil Menambahkan Data</h3>
                                        </div>
                                    </div>
                        <?php
                                    break;
                                case 'update':
                        ?>
                                    <div class="col-12">
                                        <div class="alert alert-warning animated fadeInDown alert-box" role="alert">
                                            <h3 class="font-weight-light"><i class="icon-pencil"></i> Berhasil Mengubah Data</h3>
                                        </div>
                                    </div>
                        <?php
                                    break;
                                case 'delete':
                        ?>
                                    <div class="col-12">
                                        <div class="alert alert-danger animated fadeInDown alert-box" role="alert">
                                            <h3 class="font-weight-light"><i class="icon-trash"></i> 1 Item Telah Di Hapus</h3>
                                        </div>
                                    </div>
                        <?php
                                    break;
                                case 'error':
                        ?>
                                    <div class="col-12">
                                        <div class="alert alert-danger animated fadeInDown alert-box" role="alert">
                                            <h3 class="font-weight-light"><i class="icon-puzzle"></i> ada kesalahan terhadap operasi item</h3>
                                        </div>
                                    </div>
                        <?php
                                    break;
                            }
                        ?>
                        <div class="col-12">
                            <h2 class="font-weight-light"><?= $page_title; ?></h2>
                        </div>
                    </div>
                    <!-- start row template -->
                    <div class="row">