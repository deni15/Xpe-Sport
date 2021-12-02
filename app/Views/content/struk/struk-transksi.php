<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ;?></title>
    <script src="<?php base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- plugins:css -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    
    <!-- endinject --> 
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- datatables -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- inject:css -->
    <link rel="shortcut icon" href="<?php base_url()?>/assets/images/favicon.ico" />
    <!-- endinject -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    
</head>
<body>

    <div class="container">
        <div class="jumbotron p-0 mb-0 header">
            <div class="title p-4 text-center">
            <div class="brand-logo d-flex justify-content-center bg-netral">
                    <img style="width:300px" class="my-4" src="<?php base_url()?>/assets/images/banner/logo2.png">
                  </div>
                <h3 class="card-title text-center">PT. XPE-SPORT CARS INDONESIA</h3>
                <p class="card-text text-center">JALAN CILEUNGSI-JONGGOL KM.9 DESA MEKARSARI</p>
            </div>
            <div class="title bg-secondary">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <p class="card-text mr-auto">Invoice : <?= $invoice ;?></p>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <p class="card-text ml-auto">Tanggal : <?= $tgl_transaksi ;?></p>
                        <p class="card-text ml-auto">Salesman : <?= $namasales ;?></p>
                    </div>
                </div><hr>
            </div>
        </div>
        <div class="jumbotron mb-0 content">
            <div class="form-group">
                <?php if($metodebayar ==1){ ?>
                    <p class="card-text mt-2">Metode Bayar : Cash</p>
                    <?php }else{?>
                        <p class="card-text mt-2">Metode Bayar: Credit</p>
                    <?php }?>
            </div><hr>
            <div class="form-group">
                <label for="customer">Customer :</label>
                <p class="card-text mt-2">Nama Customer : <?= $customer ;?></p>
                <p class="card-text mt-2">Email : <?= $email ;?></p>
                <p class="card-text mt-2">alamat : <?= $alamat ;?></p>
            </div><hr>
            <div class="form-group">
                <label for="customer">Data Product :</label>
                <p class="card-text mt-2">Nama Product : <?= $nama_produk ;?></p>
                <p class="card-text mt-2">Type Produk : <?= $type_produk ;?></p>
                <p class="card-text mt-2">Warna : <?= $warna ;?></p>
                <p class="card-text mt-2">Harga  : Rp. <?= number_format($hargaItem) ;?></p>
            </div><hr>
            <?php if($metodebayar ==2){ ?>
            <div class="form-group">
                <label for="customer">Sistem Kredit :</label>
                <p class="card-text mt-2">Uang Muka : <?= $dpkredit ;?></p>
                <p class="card-text mt-2">Provisi : <?= $provisi ;?></p>
                <p class="card-text mt-2">Angsuran Bunga : Rp. <?= number_format( $angsuran_bunga) ;?></p>
                <p class="card-text mt-2">Angsuran Pokok :Rp. <?= number_format($angsuran_pokok) ;?></p>
                <p class="card-text mt-2">Cicilan Perbulan  : Rp. <?= number_format($cicilan) ;?></p>
            </div><hr>
            <?php }?>
            <div class="form-group">
                <label for="customer">Data Harga :</label>
                <p class="card-text mt-2">Harga : Rp. <?= number_format($hargaItem) ;?></p>
                <p class="card-text mt-2">Asuransi : Rp. <?= number_format($asuransi) ;?></p>
                <p class="card-text mt-2">Asuransi Kepolisian : Rp. <?= number_format($asuransipolis) ;?></p>
            </div><hr>
            <div class="form-group text-right">
                <label for="customer">Data Transaksi :</label>
                <p class="card-text mt-2">Sutotal  : Rp. <?= number_format($subtotal) ;?></p>
                <p class="card-text mt-2">Potongan  : Rp. <?= number_format($potongan) ;?></p>
                <p class="card-text mt-2">Total Harga  : Rp. <?= number_format($totalharga) ;?></p>
            </div>
        </div><hr>
        <div class="jumbotron mb-0 footer text-center">
                <p class="text-center">TERIMAKASIH TELAH PERCAYA PADA XPESPORT MOBIL NDONESIA</p>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // $('#DataT').DataTable();
        window.print();
    } );
    </script>

    <!-- Plugin js for this page -->
        <script src="<?php base_url()?>/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="<?php base_url()?>/assets/js/off-canvas.js"></script>
        <script src="<?php base_url()?>/assets/js/hoverable-collapse.js"></script>
        <script src="<?php base_url()?>/assets/js/misc.js"></script>
        <script src="<?php base_url()?>/assets/js/dashboard.js"></script>
        <script src="<?php base_url()?>/assets/js/todolist.js"></script>
    <!-- End plugin js for this page -->
    
</body>
</html>