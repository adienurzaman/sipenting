

            <!-- menu profile quick info -->

            <div class="profile clearfix">

              <div class="profile_pic">

                <?php if($session['jk']=='L'){?>

                <img src="<?php echo base_url('build/images/avatar5.png'); ?>" alt="..." class="img-circle profile_img">

                <?php }else{?>

                <img src="<?php echo base_url('build/images/avatar3.png'); ?>" alt="..." class="img-circle profile_img">

                <?php } ?>
              </div>

              <div class="profile_info">

                <span>Selamat Datang,</span>

                <h2><?php echo ucwords($session['nama_pasien']); ?></h2>

              </div>

              <div class="clearfix"></div>

            </div>

            <!-- /menu profile quick info -->