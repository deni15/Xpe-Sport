<div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card mb-3">
                    <div class="card-body p-4">
                        <h1 class="card-title">Form Tambah Data Pengguna</h1>
                        <!-- breadcum -->
                        <div aria-label="breadcrumb border-0">
                        <ol class="breadcrumb border-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?php base_url()?>/PenggunaController">List Pengguna</a></li>
                            <li class="breadcrumb-item active" >Tambah Data</li>
                        </ol>
                        </div>
                        <!-- end breadcum -->
                    </div>
                </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--  -->
                            
                            <form action="<?= site_url('PenggunaController/save')?>" method="post" name="post_data" enctype="multipart/form-data">
                            <?= csrf_field();?>
                                <!-- upload gambar -->
                                <label for="gambar" class="card-text">Masukan Foto Pengguna :</label>
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
                                <label for="fullname" class="card-text">Masukan Nama Pengguna :</label>
                                <input type="text" id="fullname" class="form-control form-control-lg <?= ($validation->hasError('fullname')) ? 'is-invalid': '' ;?>" value="<?= old('fullname') ?>" name="fullname" placeholder="Fullname">
                                <div class="invalid-feedback">
                                <?= $validation->getError('fullname');?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="card-text">Masukan Username :</label>
                                <input type="text" id="username" class="form-control form-control-lg <?= ($validation->hasError('username')) ? 'is-invalid': '' ;?>" value="<?= old('username') ?>" name="username" placeholder="username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username');?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="alamat" class="card-text">Masukan Alamat Pengguna :</label>
                                <textarea type="text" id="alamat" name="alamat" class="form-control form-control-lg <?= ($validation->hasError('alamat')) ? 'is-invalid': '' ;?>" placeholder="Masukan Alamat"><?= old('alamat') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telp" class="card-text">Nomor Telphone :</label>
                                <input id="no_telp" value="<?= old('no_telp') ?>" name="no_telp" type="text" class="form-control form-control-lg <?= ($validation->hasError('no_telp')) ? 'is-invalid': '' ;?>" placeholder="Masukan Nomer Telpon">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_telp');?>
                                </div>
                            </div>
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-6">
                        <div class="form-group">
                                <label for="tanggal_lahir" class="card-text">Masukan tanggal lahir :</label>
                                <input type="date" id="tanggal_lahir" class="form-control form-control-lg <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid': '' ;?>" value="<?= old('tanggal_lahir') ?>" name="tanggal_lahir" >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tanggal_lahir');?>
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="password" class="card-text">Masukan Password :</label>
                                <input type="password" id="password" class="form-control form-control-lg <?= ($validation->hasError('password')) ? 'is-invalid': '' ;?>" value="<?= old('password') ?>" name="password" placeholder="password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password');?>
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="email" class="card-text">Masukan Email :</label>
                                <input type="email" id="email" class="form-control form-control-lg <?= ($validation->hasError('email')) ? 'is-invalid': '' ;?>" value="<?= old('email') ?>" name="email" placeholder="email">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="card-text">Pilih Jenis kelamin :</label>
                                <select name="jenis_kelamin" class="form-control form-control-lg <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid': '' ;?>" id="exampleFormControlSelect2">
                                    <option value="" selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perumpuan">Perumpuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="card-text">Pilih Level Pengguna :</label>
                                <select name="id_groups" class="form-control form-control-lg <?= ($validation->hasError('id_groups')) ? 'is-invalid': '' ;?>" id="exampleFormControlSelect2">
                                    <option value="" selected>-- Pilih Level Pengguna --</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Salesman">Salesman</option>
                                    <option value="Branch Manager">Branch Manager</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('id_groups');?>
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


    <!-- <script src=""></script>   //load library -->
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets_macb4/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script>
          $( document ).ready(function() {
        validate();
    });

    function validate(){
        $("form[name='post_data']").validate({
            rules: {
                gambar: "required",
                fullname: "required",
                tanggal_lahir: "required",
                username: "required",
                alamat: "required",
                no_telp: "required",
                password: "required",
                email: { required: true,
                         email: true,
                         accept:"[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}" 
                        }
            },
            messages: {
                gambar: "Isi terlebih dahulu gambar anda",
                fullname: "Kolom nama pengguna tidak boleh kosong",
                username: "Kolom username tidak boleh kosong",
                alamat: "Kolom alamat tidak boleh kosong",
                no_telp: "Kolom nomor telephone tidak boleh kosong",
                password: "Kolom password tidak boleh kosong"
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