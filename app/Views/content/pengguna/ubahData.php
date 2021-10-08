<div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-head">Form Ubah Data Pengguna</h3>
                    <div class="row mt-3">
                        <div class="col-lg-7">
                            <form action="<?= site_url('PenggunaController/update/').$pengguna->id?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field();?>
                            <div class="form-group">
                                <label for="gambar" class="card-text">Masukan Foto Pengguna :</label>
                                <input type="file" id="gambar" name="gambar" class="form-control form-control-lg <?= ($validation->hasError('gambar')) ? 'is-invalid': '' ;?>">
                                <div class="invalid-feedback">
                                <?= $validation->getError('gambar');?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="fullname" class="card-text">Masukan Nama Pengguna :</label>
                                <input type="text" id="fullname" class="form-control form-control-lg <?= ($validation->hasError('fullname')) ? 'is-invalid': '' ;?>" value="<?= $pengguna->fullname ?>" name="fullname" placeholder="Fullname">
                                <div class="invalid-feedback">
                                <?= $validation->getError('fullname');?>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="card-text">Masukan Username :</label>
                                <input type="text" id="username" class="form-control form-control-lg <?= ($validation->hasError('username')) ? 'is-invalid': '' ;?>" value="<?= $pengguna->username  ?>" name="username" placeholder="username">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="card-text">Masukan Alamat Pengguna :</label>
                                <textarea type="text" id="alamat" name="alamat" class="form-control form-control-lg <?= ($validation->hasError('alamat')) ? 'is-invalid': '' ;?>" placeholder="Masukan Alamat"><?= $pengguna->alamat  ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_telp" class="card-text">Nomor Telphone :</label>
                                <input id="no_telp" value="<?= $pengguna->no_telp ?>" name="no_telp" type="text" class="form-control form-control-lg <?= ($validation->hasError('no_telp')) ? 'is-invalid': '' ;?>" placeholder="Masukan Nomer Telpon">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_telp');?>
                                </div>
                            </div>
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-5">
                        <div class="form-group">
                                <label for="password" class="card-text">Masukan Password :</label>
                                <input type="password" id="password" class="form-control form-control-lg <?= ($validation->hasError('password')) ? 'is-invalid': '' ;?>" name="password" placeholder="password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password');?>
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="email" class="card-text">Masukan Email :</label>
                                <input type="email" id="email" class="form-control form-control-lg <?= ($validation->hasError('email')) ? 'is-invalid': '' ;?>" value="<?= $pengguna->email  ?>" name="email" placeholder="email">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="card-text">Pilih Jenis kelamin :</label>
                                <select name="jenis_kelamin" class="form-control form-control-lg <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid': '' ;?>" id="exampleFormControlSelect2">
                                   <?php if($pengguna->jenis_kelamin == 'Laki-laki'){?>
                                    <option value="Laki-laki" selected>Laki-laki</option>
                                    <option value="Perumpuan">Perumpuan</option>
                                    <?php }else{ ?>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perumpuan" selected>Perumpuan</option>
                                        <?php }?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2" class="card-text">Pilih Level Pengguna :</label>
                                <select name="id_groups" class="form-control form-control-lg <?= ($validation->hasError('id_groups')) ? 'is-invalid': '' ;?>" id="exampleFormControlSelect2">
                                <?php if($pengguna->id_groups == 'Administrator'){?>
                                    <option value="Administrator" selected>Administrator</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Salesman">Salesman</option>
                                    <option value="Branch Manager">Branch Manager</option>
                                    <?php }elseif($pengguna->id_groups == 'Operator'){  ?>
                                        <option value="Administrator" >Administrator</option>
                                        <option value="Operator" selected>Operator</option>
                                        <option value="Salesman">Salesman</option>
                                        <option value="Branch Manager">Branch Manager</option>
                                        <?php }elseif($pengguna->id_groups == 'Salesman'){  ?>
                                            <option value="Administrator" >Administrator</option>
                                            <option value="Operator">Operator</option>
                                            <option value="Salesman" selected>Salesman</option>
                                            <option value="Branch Manager">Branch Manager</option>
                                            <?php }else{  ?>
                                                <option value="Administrator" >Administrator</option>
                                                <option value="Operator">Operator</option>
                                                <option value="Salesman" >Salesman</option>
                                                <option value="Branch Manager" selected>Branch Manager</option>
                                                <?php }?>
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