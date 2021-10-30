<div class="content-wrapper">
      <div class="row">
              <div class="col-12 grid-margin">
                <div class="card pl-2">
                  <div class="card-body">
                    <div style="margin-left:30px;">
                      <table class="ui celled table text-center" style="width:100%" id="DataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Picture </th>
                            <th> Nama Produk </th>
                            <th> Tipe </th>
                            <th> Stok </th>
                            <th> Tahun Buatan </th>
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