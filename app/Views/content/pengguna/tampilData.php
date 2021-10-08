<div class="content-wrapper">
        <div class="col-5 grid-margin stretch-card">
            <div class="card ">
                <div class="card-body ">
                <div class="">
                <?php if(!empty($pengguna->gambar)){?>
                    <img src="<?php base_url()?>/assets/images/faces/<?= $pengguna->gambar?>" alt="image">
                    <?php }else{?>
                      <img width="200px" height="200px" class="rounded-circle" src="<?php base_url()?>/assets/images/faces/user_image.png" alt="image">
                      <?php }?>
                </div>
                </div> <!-- tutup row -->
            </div>
        </div>
    </div>