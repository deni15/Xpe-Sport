<div class="content-wrapper">
        <div class="col-12 grid-margin">
            <div class="card mb-3">
                    <div class="card-body p-4">
                        <h1 class="card-title">Form Transaksi Pembelian</h1>
                        <!-- breadcum -->
                        <div aria-label="breadcrumb border-0">
                        <ol class="breadcrumb border-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                            <li class="breadcrumb-item active" >Transaksi Pembelian</li>
                        </ol>
                        </div>
                        <!-- end breadcum -->
                    </div>
                </div>
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="<?= site_url('TransaksiController/save')?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field();?>
                              <div class="form-group">
                                <label for="produk" class="card-text">Metode Bayar :</label>
                              <div class="input-group">
                                  <select onchange="selected()" class="custom-select" id="inputGroupSelect04">
                                    <option selected>-- Pilih Metode Bayar --</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Credit</option>
                                  </select>
                                  <div class="input-group-append">
                                    <button class="btn btn-outline-primary btn-sm" type="button">Choose</button>
                                  </div>
                                </div>
                                </div>
                            <div class="form-group">
                              <label for="produk" class="card-text">Pilih Produk :</label>
                            <div class="input-group">
                               <input type="text" class="form-control" placeholder="Choose..">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">...</button>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" id="kredit" style="display:none">
                              <label for="produk" class="card-text">Pilih Simulasi Kredit :</label>
                            <div class="input-group">
                               <input type="text" class="form-control" placeholder="Choose..">
                                <div class="input-group-append">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg2">...</button>
                                </div>
                              </div>
                            </div>
                        </div> <!-- col form 1 end -->
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label for="operator" class="card-text">Operator :</label>
                                  <input readonly type="text" class="form-control" name="operator" id="operator" value="<?= session()->get('fullname')?>">
                            </div>
                            <div class="form-group">
                                <label for="produk" class="card-text">Pilih Sales :</label>
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Choose..">
                                  <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg1">...</button>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div><!-- col form 2 end -->
                    
                    <table class="table table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th>Kode Produk</th>
                          <th>Nama Produk </th>
                          <th>Jumlah</th>
                          <th> Harga  </th>
                          <th> Total </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-success">
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                          <td></td>
                        </tr>
                        <tr>
                          <td colspan="4"><b>Subtotal</b>  </td>
                          <td colspan="2"> Rp.0  </td>
                        </tr>
                        <tr>
                          <td colspan="4"><b>Potongan Harga</b>  </td>
                          <td colspan="2"> 
                          <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input type="text" class="form-control" placeholder="Potongan Harga" aria-label="Potongan Harga" aria-describedby="basic-addon1">
                            </div>      
                        </td>
                        </tr>
                        <tr>
                          <td colspan="4"><b>Total Harga</b>  </td>
                          <td colspan="2"> Rp.0 </td>
                        </tr>
                    </tbody>
                </form>
                    </table>
                </div> <!-- tutup row -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Button trigger modal -->

<!-- Modal pilih produk-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content p-5  bg-white">
      <div class="modal-header">
        <h5 class="modal-title display-4" id="exampleModalLongTitle">Pilih Produk</h5>
        <button type="button" class="close display-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <table class="ui celled table text-center" style="width:100%" id="DataProduct">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Picture </th>
                            <th> Nama Produk </th>
                            <th> Tipe </th>
                            <th> Stok </th>
                            <th> Tahun Buatan </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach($produk as $row) :?>
                                <tr>
                                <td><?= $i++?></td>
                                <td><img src="<?= base_url()?>/assets/images/produk_foto/<?= $row->gambar;?>"> </td>
                                <td><?= $row->nama_produk ?></td>
                                <td><?= $row->type_produk ?></td>
                                <td><?= $row->stok ?></td>
                                <td><?= $row->tahun_buat ?></td>
                                 <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/produk/show/<?= $row->id?>" class="btn btn-info btn-sm">Choose</a> &nbsp;&nbsp;
                               </div>
                           </td>
                          </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                </div>
              </div>
      <div class="modal-footer pt-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal pilih sales-->
<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content p-5 bg-white">
      <div class="modal-header">
        <h5 class="modal-title display-4" id="exampleModalLongTitle">Pilih Sales</h5>
        <button type="button" class="close display-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <table class="ui celled table text-center" style="width:100%" id="DataUser">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama Lengkap </th>
                            <th> Level Pengguna </th>
                            <th> Nomor Telpon </th>
                            <th> Jenis Kelamin </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($users as $row) :
                          if($row->id_groups == 'Salesman'){?>
                          <tr>
                           <td><?= $i++?></td>
                           <td><?= $row->fullname ?></td>
                           <td><?= $row->id_groups ?></td>
                           <td><?= $row->no_telp ?></td>
                           <td><?= $row->jenis_kelamin ?></td>
                           <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/pengguna/show/<?= $row->id?>" class="btn btn-info btn-sm">Choose</a> &nbsp;&nbsp;
                               </div>
                           </td>
                          </tr>
                          <?php } 
                          endforeach ;
                          ?>
                        </tbody>
                      </table>
                </div>
              </div>
      <div class="modal-footer pt-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal pilih Simulasi kredit-->
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content p-5 bg-white">
      <div class="modal-header">
        <h5 class="modal-title display-4" id="exampleModalLongTitle">Pilih Tenor Kredit</h5>
        <button type="button" class="close display-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <table class="ui celled table text-center" style="width:100%" id="DataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Jenis Simulasi Kredit </th>
                            <th> Deskripsi </th>
                            <th> Cicilan </th>
                            <th> Bunga Pinjaman </th>
                            <th> Uang Muka (DP) </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach($skredit as $row) :?>
                                <tr>
                                <td><?= $i++?></td>
                                <td><?= $row->jenis_kredit;?></td>
                                <td><?= $row->deskripsi ?></td>
                                <td><?= $row->tenor ?> bulan</td>
                                <td><?= $row->bunga_pinjaman ?> %</td>
                                <td><?= $row->uang_muka ?> %</td>
                                 <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/produk/edit/<?= $row->id?>" class="btn btn-info btn-sm"> Choose</a> &nbsp;&nbsp;
                               </div>
                           </td>
                          </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                </div>
              </div>
      <div class="modal-footer pt-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->


<script>
  $(document).ready(function() {
    $('#DataProduct').DataTable();
    $('#DataUser').DataTable();

    
} );
function selected(){
    var paymenttype = $('.custom-select').val();
    // 18 = non cash
    // alert(paymenttype);
    if(paymenttype == 2){
        $('#kredit').show();
    }else{
        $('#kredit').hide();
    }
}
</script>

    <!-- <script src=""></script>   //load library -->
    <script src="">
          $( document ).ready(function() {
        validate();

       
    });

    function validate(){
        $("form[name='post_data']").validate({
            rules: {
                gambar: "required",
                fullname: "required",
                username: "required",
                alamat: "required",
                no_telp: "required",
                password: "required",
                email: "required",
            },
            messages: {
                gambar: "Isi terlebih dahulu gambar anda",
                fullname: "Kolom nama pengguna tidak boleh kosong",
                username: "Kolom username tidak boleh kosong",
                alamat: "Kolom alamat tidak boleh kosong",
                no_telp: "Kolom nomor telephone tidak boleh kosong",
                password: "Kolom password tidak boleh kosong",
                email: "Kolom email tidak boleh kosong",
            },
            submitHandler: function(form) {
            form.submit();
            }
        });
    }

    </script>

 