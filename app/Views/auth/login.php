<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php base_url()?>/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php base_url()?>/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php base_url()?>/assets/images/favicon.ico" />
  <style>
    #box {
    background: linear-gradient(#6e0cee, #df6ec6);   
    }
    .bg-img{
     
    }
    .card{
      opacity: 0.8;
      
    }
    .bg-netral{
      opacity: 2 !important;
    }
  </style>
 
  </head>
  <body>
    <div class="container-scroller" >
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth bg-img">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="card text-left p-5 rounded">
                <?php if(session()->getFlashdata('success')):?>
                  <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('success') ?>
                  </div>
                  <?php endif; ?>
                  
                  <div class="brand-logo d-flex justify-content-center bg-netral">
                    <img style="width:300px" class="my-4" src="<?php base_url()?>/assets/images/banner/logo2.png">
                  </div>
  
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form class="pt-3" method="post" action="<?= base_url(); ?>/login/process">
                  <div class="form-group">
                    <input type="text" name="username" value="<?= old('username')?>" class="form-control form-control-lg <?= ($validation->hasError('username')) ? 'is-invalid': '' ;?>" id="exampleInputEmail1" placeholder="Username">
                   <div class="invalid-feedback">
                     <?= $validation->getError('username');?>
                   </div>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" value="<?= old('password')?>" class="form-control form-control-lg <?= ($validation->hasError('password')) ? 'is-invalid': '' ;?>" id="exampleInputPassword1" placeholder="Password">
                    <div class="invalid-feedback">
                     <?= $validation->getError('password');?>
                   </div>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-gradient-secondary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php base_url()?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php base_url()?>/assets/js/off-canvas.js"></script>
    <script src="<?php base_url()?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php base_url()?>/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>