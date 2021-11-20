<!-- content -->

    <!-- slidder -->
        <div class="jumbotron mb-0 p-0 mt-5">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
<<<<<<< HEAD
                <div class="carousel-item active">
                    <img src="<?php base_url() ?>/assets/images/banner/slider1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php base_url() ?>/assets/images/banner/slider2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php base_url() ?>/assets/images/banner/slider3.jpg" class="d-block w-100" alt="...">
                </div>
=======
                <?php foreach($slider as $row):?>
                <div class="carousel-item active">
                    <img src="<?= base_url() ?>/assets/images/item gambar/<?= $row->slider1 ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url() ?>/assets/images/item gambar/<?= $row->slider2 ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?= base_url() ?>/assets/images/item gambar/<?= $row->slider3 ?>" class="d-block w-100" alt="...">
                </div>
                <?php endforeach;?>
>>>>>>> eva
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    <!-- end slidder -->

    <!-- payment -->
        <div class="jumbotron mb-0 p-5 bg-black-solid">
            <div class="container p-5">
                <div class="container text-center mb-5">
                    <h2 class="card-title text-white">Cara Pembelian</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                        <div class="card bg-transparent p-2 text-center">
                            <i class="mdi mdi-cart text-white h1"></i>
                            <h4 class="card-title text-white">Pemesanan</h4>
                            <p class="card-text text-white">Anda dapat melakukan pemesanan dengan menghubungi kontak kami, dan tim sales kami akan membantu</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                        <div class="card bg-transparent p-2 text-center">
                            <i class="mdi mdi-cash-multiple text-white h1"></i>
                            <h4 class="card-title text-white">Pembayaran</h4>
                            <p class="card-text text-white">Pembayaran Dapat dilakukan dengan cara transfer, serta dalam cicilan credit</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mt-4">
                        <div class="card bg-transparent p-2 text-center">
                            <i class="mdi mdi-truck text-white h1"></i>
                            <h4 class="card-title text-white">Pengiriman</h4>
                            <p class="card-text text-white">Pengiriman akan mendapatkan biaya tambahan untuk Truck Towing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end payment -->

    <!-- galeri view -->
        <div class="jumbotron mb-0 p-0 bg-black-solid">
            <div class="container p-4">
            <div class="row">
<<<<<<< HEAD
                <div class="col-lg-7 col-md-7 col-sm-12m-0 p-0">
                    <div class="card bg-dark text-white rounded-0">
                        <img src="<?php base_url() ?>/assets/images/banner/galeri1.jpg" class="card-img rounded-0" alt="...">
=======
                <?php foreach($slider as $row):?>
                <div class="col-lg-7 col-md-7 col-sm-12m-0 p-0">
                    <div class="card bg-dark text-white rounded-0">
                        <img src="<?php base_url() ?>/assets/images/item gambar/<?php echo $row->card1?>" class="card-img rounded-0" alt="...">
>>>>>>> eva
                        <div class="card-img-overlay">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 m-0 p-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card bg-dark text-white rounded-0">
<<<<<<< HEAD
                                <img src="<?php base_url() ?>/assets/images/banner/galeri2 (1).jpg" class="card-img rounded-0" alt="...">
=======
                                <img src="<?php base_url() ?>/assets/images/item gambar/<?php echo $row->card2?>" class="card-img rounded-0" alt="...">
>>>>>>> eva
                                <div class="card-img-overlay">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text"></p>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="card bg-dark text-white rounded-0">
<<<<<<< HEAD
                                <img src="<?php base_url() ?>/assets/images/banner/galeri3.jpg" class="card-img rounded-0" alt="...">
=======
                                <img src="<?php base_url() ?>/assets/images/item gambar/<?= $row->card3?>" class="card-img rounded-0" alt="...">
>>>>>>> eva
                                <div class="card-img-overlay">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text"></p>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
=======
                        <?php endforeach;?>
>>>>>>> eva
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- end galeri view -->

    <!-- paralax content -->
        <div class="jumbotron mb-0 p-5 paralax">
            <div class="container pt-5 text-center align-center item-center">
                <h1 class="card-title text-white mt-5">
                    Melihat Lebih Banyak Product 
                </h1>
                <a href="<?= base_url('DashboardController/vehicles') ?>" class="btn btn-danger px-5 shadow rounded-pill"><b>Go</b></a>
            </div>
        </div>
    <!-- end paralax content -->

    <!-- Futures -->
    <div class="jumbotron mb-0 p-0">
            
    </div>
    <!-- end Futures -->


<!-- end content -->