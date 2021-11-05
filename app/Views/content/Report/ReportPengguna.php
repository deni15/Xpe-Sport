<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <script src="<?php base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- plugins:css -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- datatables -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- inject:css -->
    <link rel="shortcut icon" href="<?php base_url()?>/assets/images/favicon.ico" />
    <!-- endinject -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    
    <!-- End layout styles -->
    <!-- Layout styles -->
    
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial -->
      <div class="main-panel">
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
    window.print();
} );
</script>

 <!-- content-wrapper ends -->
          <!-- partial:<?php base_url()?>/partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- datatables -->
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!--  -->
    
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php base_url()?>/assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php base_url()?>/assets/js/off-canvas.js"></script>
    <script src="<?php base_url()?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php base_url()?>/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php base_url()?>/assets/js/dashboard.js"></script>
    <script src="<?php base_url()?>/assets/js/todolist.js"></script>
    
  

  </body>
</html>