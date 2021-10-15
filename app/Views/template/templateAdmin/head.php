<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <script src="<?php base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- plugins:css -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- datatables -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- inject:css -->
    <link rel="shortcut icon" href="<?php base_url()?>/assets/images/favicon.ico" />
    <!-- endinject -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End layout styles -->
    <!-- Layout styles -->
    
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:<?php base_url()?>/partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="<?php base_url()?>/index.html"><img src="<?php base_url()?>/assets/images/dashboard/logo-2.png" style="width: 110px;height:auto" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?php base_url()?>/index.html"> <i class="mdi mdi-car  menu-icon"></i></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <?php if(!empty(session()->get('gambar'))){?>
                    <img src="<?php base_url()?>/assets/images/faces/<?= session()->get('gambar')?>" alt="image">
                    <?php }else{?>
                      <img src="<?php base_url()?>/assets/images/faces/user_image.png" alt="image">
                      <?php }?>
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?= session()->get('fullname'); ?> </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url(); ?>/logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:<?php base_url()?>/partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                <?php if(!empty(session()->get('gambar'))){?>
                    <img src="<?php base_url()?>/assets/images/faces/<?= session()->get('gambar')?>" alt="image">
                    <?php }else{?>
                      <img src="<?php base_url()?>/assets/images/faces/user_image.png" alt="image">
                      <?php }?>
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= session()->get('fullname'); ?></span>
                  <span class="text-secondary text-small"><?= session()->get('id_groups'); ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php base_url()?>/home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <?php if(session()->get('id_groups') == 'Administrator') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Pengguna</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-box-outline menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/PenggunaController">Data Pengguna</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/ui-features/typography.html">Laporan Data Pengguna</a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            
            <?php if(session()->get('id_groups') == 'Operator') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Produk</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cart-car menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Data Produk </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Laporan Data Produk </a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Operator') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sales5" aria-expanded="false" aria-controls="sales5">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash-usd menu-icon"></i>
              </a>
              <div class="collapse" id="sales5">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/ui-features/buttons.html">Data Transaksi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/ui-features/buttons.html">Data Transaksi Cash</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/ui-features/buttons.html">Data Transaksi Kredit</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/ui-features/typography.html">Laporan Data Transaksi</a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Salesman') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sales2" aria-expanded="false" aria-controls="sales2">
                <span class="menu-title">Produk Tenor</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-credit-card-multiple menu-icon"></i>
              </a>
              <div class="collapse" id="sales2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Tenor Cash </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Tenor Kredit </a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Salesman') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sales1" aria-expanded="false" aria-controls="sales1">
                <span class="menu-title">Penjualan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash-usd menu-icon"></i>
              </a>
              <div class="collapse" id="sales1">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Penjualan Sales </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Laporan Penjualan </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Histori Penjualan </a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Branch Manager') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#branch4" aria-expanded="false" aria-controls="branch4">
                <span class="menu-title">Penjualan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cart-outline menu-icon"></i>
              </a>
              <div class="collapse" id="branch4">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Data Penjualan </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Penjualan Sales </a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Branch Manager') : ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#branch2" aria-expanded="false" aria-controls="branch2">
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash-usd menu-icon"></i>
              </a>
              <div class="collapse" id="branch2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Penjualan Cash </a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Penjualan Kredit </a></li>
                </ul>
              </div>
            </li>
            <?php endif ; ?>
            <?php if(session()->get('id_groups') == 'Branch Manager') : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php base_url()?>/nana">
                  <span class="menu-title">Profit</span>
                  <i class="mdi mdi-chart-line menu-icon"></i>
                </a>
              </li>
              <?php endif ; ?>
              <?php if(session()->get('id_groups') == 'Branch Manager') : ?>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#branch1" aria-expanded="false" aria-controls="branch1">
                  <span class="menu-title">Laporan</span>
                  <i class="menu-arrow"></i>
                  <i class="mdi mdi-clipboard-outline menu-icon"></i>
                </a>
                <div class="collapse" id="branch1">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/ProdukController"> Laporan Data Pengguna </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Laporan Data Produk </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Laporan Data Penjualan Cash </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php base_url()?>/pages/samples/login.html"> Laporan Data Penjualan Kredit </a></li>
                  </ul>
                </div>
              </li>
              <?php endif ; ?>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">