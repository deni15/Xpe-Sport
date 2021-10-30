<div class="content-wrapper">
        <div class="col-12 grid-margin">
        <div class="card mb-3">
                    <div class="card-body p-4">
                        <h1 class="card-title">Form Tambah Data Product</h1>
                        <!-- breadcum -->
                        <div aria-label="breadcrumb border-0">
                        <ol class="breadcrumb border-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?php base_url()?>/ProdukController">List Product</a></li>
                            <li class="breadcrumb-item active" >Tambah Data</li>
                        </ol>
                        </div>
                        <!-- end breadcum -->
                    </div>
                </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <!--  -->
                            
                            <form action="<?= site_url('ProdukController/save')?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field();?>
                            <!-- memasukan foto produk -->
                            <label for="gambar" class="card-text">Masukan Foto Produk :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="gambar" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid': '' ;?>" id="gambar" name="gambar">
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar');?>
                                </div>
                            <div class="form-group">
                                <label for="nama_produk" class="card-text">Masukan Nama Produk :</label>
                                <input type="text" id="nama_produk" class="form-control form-control-lg <?= ($validation->hasError('nama_produk')) ? 'is-invalid': '' ;?>" value="<?= old('nama_produk') ?>" name="nama_produk" placeholder="Nama Produk">
                                <div class="invalid-feedback">
                                <?= $validation->getError('nama_produk');?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="type_produk" class="card-text"> Tipe Produk:</label>
                                <input type="text" id="type_produk" class="form-control form-control-lg <?= ($validation->hasError('type_produk')) ? 'is-invalid': '' ;?>" value="<?= old('type_produk') ?>" name="type_produk" placeholder="type_produk">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('type_produk');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="harga_modal" class="card-text">Masukan Harga Modal Produk :</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="number" id="harga_modal" name="harga_modal" class="form-control form-control-lg <?= ($validation->hasError('harga_modal')) ? 'is-invalid': '' ;?>" placeholder="Masukan Harga Modal">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga_modal');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stok" class="card-text">Masukan jumlah stok :</label>
                                <input id="stok" value="<?= old('stok') ?>" name="stok" type="number" class="form-control form-control-lg <?= ($validation->hasError('stok')) ? 'is-invalid': '' ;?>" placeholder="Masukan Nomer Telpon">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('stok');?>
                                </div>
                            </div>
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-5">
                        <div class="form-group">
                                <label for="harga" class="card-text">Masukan Harga Jual Produk :</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="number" id="harga" name="harga" class="form-control form-control-lg <?= ($validation->hasError('harga')) ? 'is-invalid': '' ;?>" placeholder="Masukan Harga Jual">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('harga');?>
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="tahun_buat" class="card-text">Masukan tahun_buat :</label>
                                <input type="date" id="tahun_buat" class="form-control form-control-lg <?= ($validation->hasError('tahun_buat')) ? 'is-invalid': '' ;?>" value="<?= old('tahun_buat') ?>" name="tahun_buat" placeholder="tahun_buat">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_buat');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="card-text">Pilih Warna produk :</label>
                                <select name="warna" class="form-control form-control-lg <?= ($validation->hasError('warna')) ? 'is-invalid': '' ;?>" id="exampleFormControlSelect2">
                                    <option value="" selected>-- Pilih warna produk --</option>
                                    <option value="Merah">Merah</option>
                                    <option value="Hijau">Hijau</option>
                                    <option value="Putih">Putih</option>
                                    <option value="Hitam">Hitam</option>
                                    <option value="Abu-abu">Abu-abu</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('warna');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Tambah Data</button>
                            </div>
                        </div>
                        </form>
                    </div><!-- col form 2 end -->
                </div> <!-- tutup row -->
            </div>
        </div>
    </div>

    <script src="<?php base_url()?>/assets/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '#harga' ).mask('000.000.000000', {reverse: true});
                $( '#harga_modal' ).mask('000.000.000000', {reverse: true});

            })
        </script>
    <script src="">
          $( document ).ready(function() {
        validate();
    });

    function validate(){
        $("form[name='post_data']").validate({
            rules: {
                gambar: "required",
                nama_produk: "required",
                type_produk: "required",
                harga:{
                        required: true,
                        number: true
                 },
                stok: "required",
                tahun_buat: "required",
            },
            messages: {
                gambar: "Isi terlebih dahulu gambar anda",
                nama_produk: "Nama produk tidak boleh kosong",
                type_produk: "Type Produk tidak boleh kosong",
                harga: "Isi hanya dengan angka",
                stok: "Kolom stok tidak boleh kosong",
                tahun_buat: "Kolom tahun pembuatan tidak boleh kosong",
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    }
    </script>

     <!-- membuat query gambar name di index -->
     <script>
      function PriviewImg(){
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);
      }
    </script>