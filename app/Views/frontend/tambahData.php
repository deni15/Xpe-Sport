<div class="content-wrapper">
        <div class="col-12 grid-margin">
        <div class="card mb-3">
                    <div class="card-body p-4">
                        <h1 class="card-title">Form Tambah Setting Frontend</h1>
                        <!-- breadcum -->
                        <div aria-label="breadcrumb border-0">
                        <ol class="breadcrumb border-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?php base_url()?>/ProdukController">Setting</a></li>
                            <li class="breadcrumb-item active" >Tambah Setting</li>
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
                            
                            <form action="<?= site_url('SettingController/save')?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field();?>
                            <!-- memasukan foto produk -->
                            <label for="slider1" class="card-text">Masukan Gambar Slider 1 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="slider1" class="custom-file-input <?= ($validation->hasError('slider1')) ? 'is-invalid': '' ;?>" id="slider1" name="slider1">
                                                <label class="custom-file-label" for="slider1">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                    <?= $validation->getError('slider1');?>
                                </div>
                                    <label for="slider2" class="card-text">Masukan Gambar Slider 2 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="slider2" class="custom-file-input <?= ($validation->hasError('slider2')) ? 'is-invalid': '' ;?>" id="slider2" name="slider2">
                                                <label class="custom-file-label" for="slider2">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                    <?= $validation->getError('slider2');?>
                                </div>
                                    <label for="slider3" class="card-text">Masukan Gambar Slider 3 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="slider3" class="custom-file-input <?= ($validation->hasError('slider3')) ? 'is-invalid': '' ;?>" id="slider3" name="slider3">
                                                <label class="custom-file-label" for="slider3">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('slider3');?>
                                </div>
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-5">
                        <label for="card1" class="card-text">Masukan Gambar Card 1 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="card1" class="custom-file-input <?= ($validation->hasError('card1')) ? 'is-invalid': '' ;?>" id="card1" name="card1">
                                                <label class="custom-file-label" for="card1">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('card1');?>
                                    </div>
                                    <label for="card2" class="card-text">Masukan Gambar Card 2 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="card2" class="custom-file-input <?= ($validation->hasError('card2')) ? 'is-invalid': '' ;?>" id="card2" name="card2">
                                                <label class="custom-file-label" for="card2">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('card2');?>
                                    </div>
                                    <label for="card3" class="card-text">Masukan Gambar Card 3 :</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input onchange="PriviewImg()" type="file" id="card3" class="custom-file-input <?= ($validation->hasError('card3')) ? 'is-invalid': '' ;?>" id="card3" name="card3">
                                                <label class="custom-file-label" for="card3">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('card3');?>
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