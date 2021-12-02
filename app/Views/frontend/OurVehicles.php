<!-- content -->

    <!-- paralax content -->
        <div class="jumbotron mb-0 p-5 mt-5 paralax">
            <div class="container pt-5 text-center align-center item-center">
                <h1 class="card-title text-white mt-5">
                    DAFTAR PRODUCT
                </h1>
            </div>
        </div>
    <!-- end paralax content -->

    <div class="jumbotron mb-0 p-5">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="card-title">OUR VEHICLES</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form action="" method="" class="d-flex">
                            <div class="input-group mb-3">
                                <input class="form-control" type="search" placeholder="Cari Produk..." aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($produk as $row) {?>
                    <div class="col">
                        <div class="card">
                            <?php if($row->gambar==''){?>
                                <img src="<?= base_url()?>/assets/images/produk_foto/default-product.jpg" class="card-img-top" alt="...">
                            <?php }else { ?>
                                <img src="<?= base_url()?>/assets/images/produk_foto/<?= $row->gambar;?>" class="card-img-top" alt="...">
                            <?php } ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row->nama_produk ?></h5>
                            <h6 class="card-text"><?= $row->type_produk ?></h6>
                            <span class="ms-auto badge bg-secondary"><?= $row->warna ?></span>
                            <h6 class="card-text text-secondary">Rp.<?= $row->harga ?></h6>

                            <a href="/dashboard/wa/<?=$row->id ?>" class="btn btn-success form-control"><i class="mdi mdi-whatsapp h5"></i></a>
                        </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- end content -->