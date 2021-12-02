<div class="content-wrapper">
      <div class="row">
              <div class="col-12 grid-margin">
                <div class="card mb-3">
                  <div class="card-body p-4">
                    <h1 class="card-title">Data Produk</h1>
                    <!-- breadcum -->
                    <div aria-label="breadcrumb border-0">
                      <ol class="breadcrumb border-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Simulasi Kredit List</li>
                      </ol>
                    </div>
                    <!-- end breadcum -->
                    <?php if (!empty(session()->getFlashdata('success'))){ ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                      </div>
                      <?php }?>
                      <div class="swal" data-swal="<?= session()->getFlashdata('success') ?>"></div>
                  </div>
                </div>

                <div class="card pl-2">
                  <div class="card-body">
                    <div class="row">
                            <div class="col-lg-2">
                              <a href="<?= site_url('KreditController/create') ?>" class="btn btn-primary btn-md form-control"><i class="mdi mdi-plus menu-icon"></i><i class="mdi mdi-account menu-icon"></i></a>
                                <!-- //<button class="btn btn-light" onclick="Swal.fire()">test</button> -->
                            </div>
                                  <div class="col-lg-10">
                                </div>
                        </div>
                        <hr>
                    <div class="table-responsive p-4" >
                      <table class="ui celled table text-center" id="DataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Jenis Simulasi Kredit </th>
                            <th> Cicilan </th>
                            <th> Bunga Pinjaman </th>
                            <th> Uang Muka (DP) </th>
                            <th> Administrasi </th>
                            <th> Asuransi </th>
                            <th> Provisi </th>
                            <th> Polis Asuransi </th>
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
                                <td><?= $row->tenor ?> bulan</td>
                                <td><?= $row->bunga_pinjaman ?> %</td>
                                <td><?= $row->uang_muka ?> %</td>
                                <td>Rp. <?= $row->administrasi ?></td>
                                <td><?= $row->asuransi ?> %</td>
                                <td><?= $row->provisi ?> %</td>
                                <td>Rp. <?= $row->polis_asuransi ?></td>
                                 <td>
                               <div class="d-flex justify-content-center d-inline">
                                    <a href="/produk/edit/<?= $row->id?>" class="btn btn-secondary btn-sm"> <i class="mdi mdi-pencil"></i></a> &nbsp;&nbsp;
                                    
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $row->id?>">
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
                                            Apa anda yakin ingin menghapus Simulasi Ini?
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

<script>
  $(document).ready(function() {
    $('#DataT').DataTable();
} );

</script>