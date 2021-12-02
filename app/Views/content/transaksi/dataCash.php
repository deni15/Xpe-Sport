<div class="content-wrapper">
      <div class="row">
              <div class="col-12 grid-margin">
                <div class="card mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title">Data Transaksi Cash</h1>
                    <!-- breadcum -->
                    <div aria-label="breadcrumb border-0">
                      <ol class="breadcrumb border-0 p-0">
                        <li class="breadcrumb-item"><a href="<?php base_url()?>/home">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php base_url()?>/TransaksiController">List Transaksi Cash</a></li>
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
                              <!-- <a href="<?= site_url('TransaksiController/create') ?>" class="btn btn-primary btn-md form-control h5 text-white"><i class="mdi mdi-plus menu-icon"></i> Tambah</a> -->
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
                            <th> Tanggal Transaksi </th>
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
                                <td><?= $key->created_at ?></td>
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