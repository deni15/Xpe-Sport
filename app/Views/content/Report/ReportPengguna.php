<div class="content-wrapper">
<div class="row">
              <div class="col-12 grid-margin">
                <div class="card pl-2">
                  <div class="card-body">
                        <div style="margin-left:30px;">
                      <table class="ui celled table text-center" style="width:100%" id="dataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Nama Lengkap </th>
                            <th> Level Pengguna </th>
                            <th> Nomor Telpon </th>
                            <th> Jenis Kelamin </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($users as $row) :?>
                          <tr>
                           <td><?= $i++?></td>
                           <td><?= $row->fullname ?></td>
                           <td><?= $row->id_groups ?></td>
                           <td><?= $row->no_telp ?></td>
                           <td><?= $row->jenis_kelamin ?></td>
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
    $('#dataT').DataTable();
} );
</script>