 <!-- top navigation -->

        <div class="top_nav">

          <div class="nav_menu">

            <nav>

              <div class="nav toggle">

                <b id="menu_toggle"><i class="fa fa-bars"></i></b>

              </div>



              <ul class="nav navbar-nav navbar-right">

                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                    <img src="images/img.jpg" alt=""><?php echo ucwords($session['nama_pasien']); ?>

                    <span class=" fa fa-angle-down"></span>

                  </a>

                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                   <!--Dropdown Logout-->

                    <li><a data-toggle="modal" data-target="#modal_logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>

                  </ul>

                </li>
              <?php if($session['level']=="admin"){ ?>

              <?php }else{ ?>

              <li role="presentation" class="dropdown">

                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">

                    <i class="fa fa-bell-o"></i>

                    <span id="jml_unread" class="badge bg-green"></span>

                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu"> 
                  <div id="area_tampil">

                    
                  </div>
                  <li> 
                    <div class='text-center'> <a class='text-warning' href="<?php echo site_url('c_stunting/riwayat'); ?>">
                    <strong>Lihat Semua Riwayat</strong>
                    <i class='fa fa-angle-right'></i></a>
                    </div>
                  </li>
                  </ul>
 
                 
                </li>    

              <?php } ?> 

                

              </ul>

            </nav>

          </div>

        </div>

        <!-- /top navigation -->



<!--Modal Logout-->

<div class="modal fade" id="modal_logout" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true">

  <div class="modal-dialog modal-sm">

    <div class="modal-content">



      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>

        </button>

        <h4 class="modal-title" id="myModalLabel2">Konfirmasi Logout Sistem</h4>

      </div>

      <div class="modal-body">

        <p>Silahkan klik tombol <strong> Logout </strong> untuk keluar dari sistem</p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-backward"></i> Kembali</button>

        <a href="<?php echo site_url('c_login/logout'); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Logout</a>

      </div>



    </div>

  </div>

</div>

<!--/Modal-->
<script type="text/javascript">
  $(function(){
  
    setInterval(function() {
      tampil_unread();
      tampil_notif();

    },1500);

    // $('#btn_tampil').click(function() {
    //   tampil_notif();
    // });

  function tampil_unread(){
    var nkk = "<?php echo $session['nkk']; ?>";
    $.ajax({
      type:"POST",
      url:"<?php echo site_url('c_ajax/tampil_unread'); ?>",
      data:{nkk:nkk},
      cache:false,
      success:function(data){
        // alert(data);
        if(data != 0){
          $("#jml_unread").text(data);
        }else{
          $("#jml_unread").text('');
        }
      }

    });
  }  

  function tampil_notif(){
    var nkk = "<?php echo $session['nkk']; ?>";
    $.ajax({
      type:"POST",
      url:"<?php echo site_url('c_ajax/tampil_notif'); ?>",
      data:{nkk:nkk},
      cache:false,
      success:function(data){
        // alert(data);
        $("#area_tampil").html(data);
      }

    });
  } 

  });

</script>