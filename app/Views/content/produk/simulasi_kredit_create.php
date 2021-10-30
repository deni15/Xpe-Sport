<div class="content-wrapper">
        <div class="col-12 grid-margin">
        <div class="card mb-3">
                    <div class="card-body p-4">
                        <h1 class="card-title">Form Tambah Data Simulasi Kredit</h1>
                        <!-- breadcum -->
                        <div aria-label="breadcrumb border-0">
                        <ol class="breadcrumb border-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?php base_url()?>/KreditController">Simulasi Kredit List</a></li>
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
                            
                            <form action="<?= site_url('KreditController/save')?>" method="post">
                            <?= csrf_field();?>
                            <!-- memasukan foto produk -->
                           
                            <div class="form-group">
                                <label for="jenis_kredit" class="card-text">Jenis Kredit :</label>
                                <input type="text" id="jenis_kredit" class="form-control form-control-lg <?= ($validation->hasError('jenis_kredit')) ? 'is-invalid': '' ;?>" value="<?= old('jenis_kredit') ?>" name="jenis_kredit" placeholder="">
                                <div class="invalid-feedback">
                                <?= $validation->getError('jenis_kredit');?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi" class="card-text"> Deskripsi :</label>
                                <textarea type="text" id="deskripsi" name="deskripsi" class="form-control form-control-lg <?= ($validation->hasError('deskripsi')) ? 'is-invalid': '' ;?>" placeholder="Masukan deskripsi"><?= old('deskripsi') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('deskripsi');?>
                                </div>
                            </div>
                            
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-5">
                            <div class="form-group">
                            <label for="stok" class="card-text">Tenor, Bunga Pinjaman, Uang Muka :</label>
                                <div class="input-group">
                                    <input type="number" class="form-control <?= ($validation->hasError('tenor')) ? 'is-invalid': '' ;?>" value="<?= old('tenor') ?>" name="tenor" placeholder="example : 60" id="">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text " >Bulan</span>
                                    </div>
                                    <input type="number" name="bunga_pinjaman" class="form-control <?= ($validation->hasError('bunga_pinjaman')) ? 'is-invalid': '' ;?>" value="<?= old('bunga_pinjaman') ?>" placeholder="example : 5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">%</span>
                                    </div>
                                    <input type="number" name="uang_muka" class="form-control <?= ($validation->hasError('uang_muka')) ? 'is-invalid': '' ;?>" value="<?= old('uang_muka') ?>" placeholder="example : 30">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">%</span>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('bunga_pinjaman');?>
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
                jenis_kredit: "required",
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