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
                               <input type="hidden" id="product_id" class="form-control" placeholder="Choose..">
                               <input type="text" id="product_name" class="form-control" placeholder="Choose..">
                                <div class="input-group-append">
                                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">...</button>
                                </div>
                              </div>
                            </div>
                            <div class="form-group" id="kredit" style="display:none">
                              <label for="produk" class="card-text">Pilih Simulasi Kredit :</label>
                            <div class="input-group">
                               <input type="hidden" id="skredit_id" class="form-control" placeholder="Choose..">
                               <input type="text" id="skredit_name" class="form-control" placeholder="Choose..">
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
                                <input type="hidden" id="sales_id" class="form-control" placeholder="Choose..">
                                <input type="text" id="sales_name" class="form-control" placeholder="Choose..">
                                  <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".bd-example-modal-lg1">...</button>
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div><!-- col form 2 end -->
                    <div class="container-fluid card bg-white shadow border rounded-0 p-3 ">
                      <div class="row">
                        <div class="container text-center border-bottom border-secondary p-3">
                          <div class="display-5">Detail Transaksi</div>
                        </div>
                        <div class="col-3 border-right border-secondary img-preview p-4">
                        <img src="<?= base_url()?>/assets/images/produk_foto/default-product.jpg" class="img-default img-thumbnail" alt="">
                          </div>
                        <div class="col-5 border-right border-secondary">
                          <div class="table-responsive">
                          <table class="table table-borderless table-ms">
                              <thead>
                                <tr>
                                  <th>Metode Bayar :</th>
                                  <th id="carabayar"></th>
                                </tr>
                                <tr>
                                  <th>Tenor :</th>
                                  <th id="skreditName"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>Banyak Cicilan :</th>
                                  <td>
                                    <div class="input-group">
                                      <input readonly type="number" name="stok" class="form-control"  id="skreditTenor">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="">bulan</span>
                                      </div>
                                  </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Uang Muka :</th>
                                  <td>
                                    <div class="input-group">
                                      <input readonly type="number" name="stok" class="form-control"   id="skreditDp">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="">%</span>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Bunga Peminjaman :</th>
                                  <td>
                                    <div class="input-group">
                                      <input readonly type="number" name="stok" class="form-control" id="skreditBunga">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="">%</span>
                                        </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            </div>
                        </div>
                       
                        <div class="col-4">
                        <div class="table-responsive">
                          <table class="table table-borderless table-ms">
                              <thead>
                                <tr>
                                  <th>Nama Sales :</th>
                                  <th id="salesName"></th>
                                </tr>
                              </thead>
                            </table>
                            </div>
                            <div class="table-responsive">
                          <table class="table table-borderless table-ms">
                              <thead>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>Nama Pembeli :</th>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" name="nama_pembeli" placeholder="Masukan Nama Pembeli" class="form-control">
                                  </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Nomor Telphone :</th>
                                  <td>
                                    <div class="input-group">
                                      <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomer Pembeli">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th>Alamat Pembeli:</th>
                                  <td>
                                    <div class="input-group">
                                      <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="5" placeholder="masukan alamat pembeli"></textarea>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            </div>
                        </div>
                      </div>

                    </div>
                    <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th>Nama Produk </th>
                          <th>Stok</th>
                          <th>Harga Pabrik</th>
                          <th>Harga Jual</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-success">
                          <td id="produkName">  </td>
                          <td class="col-xs-2">
                            <input type="number" readonly name="stok" maxlength="4" size="4" class="form-control" id="produkStok">
                          </td>
                          <td>
                            <input type="number" readonly name="harga_modal" class="form-control" id="hargaModal"> 
                          </td>
                          <td>
                            <input type="number" readonly name="harga_jual" class="form-control" id="hargaJual">
                          </td>
                          <td>
                            <button type="button" onclick="subtotal()" id="jml" class="btn btn-success form-control">Jumlahkan</button>
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4"><b>Subtotal</b>  </td>
                          <td colspan="2" class="subtotall">  </td>
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
                    </div>
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
                               <button type="button" data-dismiss="modal" onclick="buttonFind(<?= $row->id?>)" class="btn btn-info btn-sm">Choose</button> &nbsp;&nbsp;
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
                                    <button type="button" data-dismiss="modal" onclick="buttonFindSales(<?= $row->id?>)" class="btn btn-info btn-sm">Choose</button> &nbsp;&nbsp;
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
        <div class="container-fluid table-responsive">
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
                               <button type="button" data-dismiss="modal" onclick="buttonFindSkredit(<?= $row->id?>)" class="btn btn-info btn-sm">Choose</button> &nbsp;&nbsp;
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
    });

    // Selected pembayaran credit
    function selected(){
        var paymenttype = $('.custom-select').val();
        // 18 = non cash
        // alert(paymenttype);
        if(paymenttype == 2){
            $('#kredit').show();
            $('#carabayar').text('Credit');
            buttonFindSkredit(idx);
        }else{
            $('#kredit').hide();
            $('#carabayar').text('Cash');
            $('#skreditName').text('-');
            $('#skreditTenor').val(0);
            $('#skreditBunga').val(0)
            $('#skreditDp').val(0);
        }
    }


    //mengambil data produk
      function buttonFind(idx) {
          //$('#teww').val(idx);
          //e.preventDefault();
            var id = idx;
              $.ajax({
                url: "<?= base_url('TransaksiController/getProductWithAjax')?>",
                method: 'post',
                data: {id:idx},
                dataType: 'json',
                  success:function(data){
                      console.log(data);
                       $('#product_id').val(data.id);
                       $('#product_name').val(data.nama_produk+' '+data.type_produk);
                       $('#produkName').text(data.nama_produk+' '+data.type_produk);
                       $('#produkStok').val(data.stok);
                       $('#hargaModal').val(data.harga_modal);
                       $('#hargaJual').val(data.harga);
                       $('.img-default').hide();
                       $('.img-preview').append('<img src="<?= base_url()?>/assets/images/produk_foto/'+data.gambar+'" class="img-thumbnail img-default" alt="">');
                    // document.getElementById("teww").innerHTML +="NIM :" + data.id ;
                      $('#default').modal('toggle');
                  },
                  error:function(data){
                      console.log("error");
                      console.log(data);
                  },
              });
      }


      function buttonFindSales(idx) {
          //$('#teww').val(idx);
          //e.preventDefault();
            var id = idx;
              $.ajax({
                url: "<?= base_url('TransaksiController/getSalesWithAjax')?>",
                method: 'post',
                data: {id:idx},
                dataType: 'json',
                  success:function(data){
                      console.log(data);
                       $('#sales_id').val(data.id);
                       $('#sales_name').val(data.fullname);
                       $('#salesName').text(data.fullname);
                    // document.getElementById("teww").innerHTML +="NIM :" + data.id ;
                      $('#salesmodal').modal('toggle');
                  },
                  error:function(data){
                      console.log("error");
                      console.log(data);
                  },
              });
      }


      function buttonFindSkredit(idx) {
          //$('#teww').val(idx);
          //e.preventDefault();
            var id = idx;
              $.ajax({
                url: "<?= base_url('TransaksiController/getSkreditWithAjax')?>",
                method: 'post',
                data: {id:idx},
                dataType: 'json',
                  success:function(data){
                      console.log(data);
                       $('#skredit_id').val(data.id);
                       $('#skredit_name').val(data.jenis_kredit);
                       $('#skreditName').text(data.jenis_kredit);
                       $('#skreditTenor').val(data.tenor);
                       $('#skreditBunga').val(data.bunga_pinjaman);
                       $('#skreditDp').val(data.uang_muka);
                    // document.getElementById("teww").innerHTML +="NIM :" + data.id ;
                      $('#salesmodal').modal('toggle');
                  },
                  error:function(data){
                      console.log("error");
                      console.log(data);
                  },
              });
      }


      function subtotal() {
          //$('#teww').val(idx);
          //e.preventDefault();
            var pembayaran = parseInt($('.custom-select').val());
            var hargaJual  = parseInt($('#hargaJual').val());
            var skreditTenor  = parseInt($('#skreditTenor').val());
            var skreditBunga  = parseInt($('#skreditBunga').val());
            var skreditDp  = parseInt($('#skreditDp').val());
              $.ajax({
                url: "<?= base_url('TransaksiController/subtotal')?>",
                method: 'post',
                data: {hargaJual:hargaJual,skreditTenor:skreditTenor,skreditBunga:skreditBunga,skreditDp:skreditDp,pembayaran:pembayaran
                },
                dataType: 'json',
                  success:function(data){
                      console.log(data);
                      $('.subtotall').text('Rp.' + data);

                    // document.getElementById("teww").innerHTML +="NIM :" + data.id ;
                  },
                  error:function(data){
                      console.log("error");
                      console.log(data);
                  },
              });
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

 //mencari subtotal
      // var sum = 0;
      //   $('#jml').click(function(){
      //       var hargaJual  = parseInt($('#hargaJual').val());
      //       var skreditTenor  = parseInt($('#skreditTenor').val());
      //       var skreditBunga  = parseInt($('#skreditBunga').val());
      //       var skreditDp  = parseInt($('#skreditDp').val());

      //       var query = (hargaJual * skreditBunga% * skreditTenor/12);
      //       consol.log(query);
      //   });
    
    </script>

 