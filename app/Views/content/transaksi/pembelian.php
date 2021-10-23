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
                                <label for="tanggal" class="card-text">Tanggal Transaksi :</label>
                                <input readonly type="text" id="tanggal" name="tanggal" value="<?= date('d-m-Y');?> " class="form-control form-control-lg">
                            </div>
                            <div class="form-group">
                                <label for="produk" class="card-text">Pilih Produk :</label>
                                <div class="row">
                                    <div class="col-9">
                                        <input readonly type="text" id="produk" class="form-control  " value="<?= old('produk') ?>" name="produk" placeholder="Choose">
                                    </div>
                                    <div class="col-3">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                         Pilih
                                        </button>
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
                                        <label for="sales" class="card-text">Pilih Sales :</label>
                                        <div class="row">
                                            <div class="col-9">
                                                <input readonly type="text" id="sales" class="form-control  " value="<?= old('sales') ?>" name="sales" placeholder="Choose">
                                            </div>
                                            <div class="col-3">
                                            <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Pilih</a>
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


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


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