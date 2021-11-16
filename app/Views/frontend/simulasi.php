
<div class="container py-5 mt-5">
<table class="ui celled table text-center" style="width:100%" id="DataT">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Jenis Simulasi Kredit </th>
                            <th> Deskripsi </th>
                            <th> Cicilan </th>
                            <th> Bunga Pinjaman </th>
                            <th> Uang Muka (DP) </th>
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
                          </tr>
                          <?php endforeach ;?>
                        </tbody>
                      </table>
</div>