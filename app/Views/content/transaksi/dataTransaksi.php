<div class="content-wrapper">
      <div class="row">
              <div class="col-12 grid-margin">
                <div class="card mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title">Data Transaksi</h1>
                    <!-- breadcum -->
                    <div aria-label="breadcrumb border-0">
                      <ol class="breadcrumb border-0 p-0">
                        <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php base_url()?>/TransaksiController">List Transaksi</a></li>
                      </ol>
                    </div>
                    <!-- end breadcum -->
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="swal" data-swal="<?= session()->getFlashdata('success') ?>"></div>
                  </div>
                </div>

                <div class="card pl-2">
                  <div class="card-body">
                    <div class="row">
                            <div class="col-lg-2">
                              <a href="<?= site_url('TransaksiController/create') ?>" class="btn btn-primary btn-md form-control h5 text-white"><i class="mdi mdi-plus menu-icon"></i> Tambah</a>
                                </div>
                                  <div class="col-lg-10">
                                </div>
                        </div>
                        <hr>
                    <div class="table-responsive p-4">
                      <table class="ui celled table text-center"  id="DataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> invoice </th>
                            <th> Nama Customer </th>
                            <th> Email Customer </th>
                            <th> Nama Produk </th>
                            <th> Jumlah beli </th>
                            <th> Harga Produk </th>
                            <th> Harga Bayar </th>
                            <th> Sales </th>
                            <th> Metode Beli </th>
                            <th> Tanggal Transaksi </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach($transaksi as $row => $key) :?>
                                <tr>
                                <td><?= $i++?></td>
                                <td><?= $key->invoice ?></td>
                                <td><?= $key->customer_name ?></td>
                                <td><?= $key->email_customer ?></td>
                                <td><?= $key->nama_produk.' '.$key->type_produk ?></td>
                                <td><?= $key->jumlah_beli ?></td>
                                <td>Rp. <?= number_format($key->harga) ?></td>
                                <td>Rp. <?= number_format($key->totalbayar) ?></td>
                                <td><?= $key->fullname ?></td>
                                <?php if($key->metode_bayar == '1'){?>
                                    <td><p>Cash</p></td>
                                <?php }else{?>
                                    <td><p>Credit</p></td>
                                    <?php } ?>
                                <td><?= $key->created_at ?></td>
                                 <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/produk/show/<?= $key->id?>" class="btn btn-primary btn-sm"> <i class="mdi mdi-file-document"></i></a> &nbsp;&nbsp;
                                    <a href="/produk/edit/<?= $key->id?>" class="btn btn-secondary btn-sm"> <i class="mdi mdi-pencil"></i></a> &nbsp;&nbsp;
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $key->id?>">
                                    <i class="mdi mdi-delete-forever"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?= $key->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                          <div class="alert alert-warning form-control" role="alert">
                                                <h4>Informasi </h4>
                                              </div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Apa anda yakin ingin menghapus Produk Ini?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-gradient-danger" data-dismiss="modal">Batalkan</button>
                                            <form action="/produk/<?= $key->id?>" method="post">
                                            <?= csrf_field();?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-gradient-success" >Lanjut Hapus</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                               </div>
                           </td>
                          </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

<script>
  $(document).ready(function() {
    $('#DataT').DataTable();
} );
</script>