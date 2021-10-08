<div class="content-wrapper">
<div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                    <h4 class="card-title">Data Produk</h4>
                    <div class="row mt-2 pr-4">
                            <div class="col-lg-3">
                            <form action="<?= base_url('Produk/search') ?>" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search by data details" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm btn-gradient-primary" type="submit">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                  <div class="col-lg-5">
                                </div>
                              <div class="col-lg-2">
                                  <a href="<?= site_url('Produk/print') ?>" class="btn btn-gradient-info btn-lg form-control"><i class="mdi mdi-printer menu-icon"></i></a>
                              </div>
                            <div class="col-lg-2">
                              <a href="<?= site_url('ProdukController/create') ?>" class="btn btn-gradient-primary btn-lg form-control"><i class="mdi mdi-plus menu-icon"></i><i class="mdi mdi-account menu-icon"></i></a>
                            </div>
                        </div>
                    <div class="table-responsive">
                      <table class="table">
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
                                <td><img src="<?= base_url().'/assets/images/produk_foto/'.$row->gambar ?>" width="400px" height="400px"> </td>
                                <td><?= $row->nama_produk ?></td>
                                <td><?= $row->type_produk ?></td>
                                <td><?= $row->stok ?></td>
                                <td><?= $row->tahun_buat ?></td>
                                 <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/produk/show/<?= $row->id?>" class="btn btn-gradient-primary btn-sm"> <i class="mdi mdi-file-document"></i></a> &nbsp;&nbsp;
                                    <a href="/produk/edit/<?= $row->id?>" class="btn btn-gradient-warning btn-sm"> <i class="mdi mdi-pencil"></i></a> &nbsp;&nbsp;
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-gradient-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $row->id?>">
                                    <i class="mdi mdi-delete-forever"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?= $row->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <form action="/produk/<?= $row->id?>" method="post">
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