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
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script> 
  const swal = $('.swal').data('swal');

  if(swal){
        Swal.fire({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: swal,
            timer: 2000,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
      }

      $('.hapus-data').on('click', function(e){

      e.preventDefault();
      const href = $(this).attr('href');

        Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data ini akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Data!',
        cancelButtonText: 'Tidak, Cancel!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })

      });
  </script>
    
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
    <!-- <script src="<?php base_url()?>/assets/js/sweetalert.js"></script> -->
    <script src="<?php base_url()?>/assets/js/dashboard.js"></script>
    <script src="<?php base_url()?>/assets/js/todolist.js"></script>
    

  

  </body>
</html>