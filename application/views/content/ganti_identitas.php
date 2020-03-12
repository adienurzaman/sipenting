<?php

if($this->session->flashdata('ubah_berhasil') == TRUE){

?>

<body onload="new PNotify({

                                  title:'Password Berhasil diperbaharui',

                                  type: 'success',

                                  text: '<?php echo $this->session->flashdata('ubah_berhasil');?>',

                                  nonblock: {

                                      nonblock: true

                                  },

                                  styling: 'bootstrap3',

                                  addclass: 'dark'

                              });">

</body>

<?php

}elseif($this->session->flashdata('ubah_gagal') == TRUE){

?>

<body onload="new PNotify({

                                  title:'Password Gagal diperbaharui',

                                  type: 'error',

                                  text: '<?php echo $this->session->flashdata('ubah_gagal');?>',

                                  nonblock: {

                                      nonblock: true

                                  },

                                  styling: 'bootstrap3',

                                  addclass: 'dark'

                              });">

</body>

<?php

}

?>



<div class="right_col" role="main">

  <div class="page-title">

    <div class="title_left">

       <h3><small>Laman Ubah Identitas Akun</small></h3>

    </div>

    <div class="title_right">

        <div>

           <label class="control-label col-sm-4 col-sm-12 col-xs-12"></label>

            <div class="col-sm-8 col-sm-12 col-xs-12">

        </div>

      </div>

    </div>

  </div>  

<!-- content -->

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

                  <div class="x_title">

                      <h2><small><span class="fa fa-refresh"></span> Form Ubah Identitas Akun</small></h2>

                      <ul class="nav navbar-right panel_toolbox">

                        

                        <li><a class="collapse-link"></i></a></li>

                        <li><a class="collapse-link"></i></a></li>

                        <li><a class="collapse-link"></i></a></li>

                        <li><button type="button" class="btn btn-sm btn-warning" onclick="window.history.go(-1)";><i class="glyphicon glyphicon-circle-arrow-left"></i> Kembali</button>

                        </li>

                        <li>

                        

                        </li>

              

                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                        </li>

                      </ul>

                    <div class="clearfix"></div>

                  </div>

            <div class="x_content">

                    <form method="post" action="<?php echo site_url('c_akun/gantiPassword');?>" class="form-horizontal form-label-left" id="demo-form" data-parsley-validate novalidate>



                      <p>

                        <div class='alert alert-info alert-dismissible fade in' role='alert'>

                             <i class="fa fa-info-circle"></i> <strong>Informasi</strong> <br>
                             <p>
                               Anda hanya diperbolehkan untuk mengubah <i>email</i> dan nomor telepon saja.<br>
                               Jika ada berubahan data <i> email</i> atau nomor telepon, silahkan ubah dengan <i> email </i> dan nomor telepon yang Valid.<br>
                               Jika terdapat kekeliruan data identitas segera hubungi administrator SIPENTING.
                             </p>

                           </div>

                      </p>

                     <hr/>                        

                    <div class='alert alert-success alert-dismissible fade in hideElement' id='benar' role='alert'>

                             <d id="text-benar"></d>

                           </div>

            

                     <div class='alert alert-danger alert-dismissible fade in hideElement' id='salah' role='alert'>

                               <d id="text-salah"></d>

                              </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nik" class="form-control col-md-7 col-xs-12" name="nik" placeholder="NIK Pasien" type="text" value="<?php echo $session['nik']; ?>" disabled>  
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nkk">Nomor KK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nkk" class="form-control col-md-7 col-xs-12" name="nkk" placeholder="NKK Pasien" type="text" value="<?php echo $session['nkk']; ?>" disabled>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama" class="form-control col-md-7 col-xs-12" name="nama" placeholder="Nama Pasien" type="text" value="<?php echo $session['nama_pasien']; ?>" disabled> 
                        </div>
                      </div>

                      <?php 

                      $str = date_create($session['tgllahir']);
                      $tgllahir = date_format($str, 'd-m-Y');

                      ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgllahir">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tgllahir" class="form-control col-md-7 col-xs-12" name="tgllahir" placeholder="Nama Pasien" type="text" value="<?php echo $tgllahir; ?>" disabled> 
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">JK
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="jk" class="form-control col-md-7 col-xs-12" name="jk" placeholder="Jenis Kelamin Pasien" type="text" value="<?php echo $session['jk']; ?>" disabled> 
                        </div>
                      </div>

                  
                      <div class="ln_solid"></div>


                       <div class="item form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <div class="form-group">

                        <div class='input-group' id="keyup">

                            <input type='email' id="email" class="form-control" name="email" required placeholder="Email Anda" />

                            <span class="input-group-addon btn-primary" id="change_email">

                               <span class="fa fa-edit"></span><i> Ubah</i>

                            </span>

                        </div>

                      </div>

                        </div>

                      </div>


                      <div class="item form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notelp">Nomor Telepon

                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <div class="form-group">

                        <div class='input-group' id="keyup">

                            <input type='text' id="notelp" class="form-control" name="notelp" required placeholder="Nomor Telepon Anda" />

                            <span class="input-group-addon btn-primary" id="change_notelp">

                               <span class="fa fa-edit" ></span><i> Ubah</i>

                            </span>

                        </div>

                      </div>

                        </div>

                      </div>

                       

                      <div class="form-group">

                      </div>

                      </form>

                      </div>

                     </div> 

                  </div>

                </div>

              </div>

               <div class="clearfix"></div>

                <div class="clearfix"></div>

                 <div class="clearfix"></div>

            

        <!-- /page content -->





<script type="text/javascript">

  $(document).ready(function () {

    get_identitas();

    function get_identitas(){

     var temp_nik = "<?php echo $session['nik']; ?>";

     if(temp_nik == ""){

        $("#change_notelp").attr("disabled","disabled");
        $("#change_email").attr("disabled","disabled");

     }else{

      $.ajax({

          type:'POST',

          url:"<?php echo site_url('c_ajax/get_identitas'); ?>",

          data:"nik=" + temp_nik,

          success: function(data)

          { 

              var str = data.split("/");

              if(str[0] == 1){

                $("#email").val(str[1]);

                $("#notelp").val(str[2]);

              }else{

                $("#email").val("");

                $("#notelp").val("");

              }

          }

      }); 

      }

    }

    $("#change_email").click(function(){

    var temp_nik = "<?php echo $session['nik']; ?>";
    var temp_email = $("#email").val();

     $.ajax({

          type:'POST',

          url:"<?php echo site_url('c_ajax/change_email'); ?>",

          data:{nik:temp_nik, email:temp_email},

          success: function(data)

          { 

              if(data == 1){

                
                $("#text-benar").text("");

                $("#text-benar").text("Email Berhasil di update/ubah.");

                $("#benar").show();

                setInterval(function(){
                  $("#benar").hide();
                },3000);
                $("#salah").hide();

                get_identitas();

              }else{

                $("#text-salah").text("");

                $("#text-salah").text("Email Gagal di update/ubah.");

                $("#benar").hide();
                $("#salah").show();
                setInterval(function(){
                  $("#salah").hide();
                },1500);

              }

          }

      }); 

    });


    $("#change_notelp").click(function(){

     var temp_nik = "<?php echo $session['nik']; ?>";
     var temp_notelp = $("#notelp").val();

     $.ajax({

          type:'POST',

          url:"<?php echo site_url('c_ajax/change_notelp'); ?>",

          data:{nik:temp_nik, notelp:temp_notelp},

          success: function(data)

          { 

              if(data == 1){

                $("#text-benar").text("");

                $("#text-benar").text("Nomor Telepon Berhasil di update/ubah.");

                $("#benar").show();
                setInterval(function(){
                  $("#benar").hide();
                },3000);
                $("#salah").hide();

                get_identitas();

              }else{

                $("#text-salah").text("");

                $("#text-salah").text("Nomor Telepon Gagal di update/ubah.");

                $("#benar").hide();
                $("#salah").show();
                setInterval(function(){
                  $("#salah").hide();
                },1500);

              }

          }

      }); 

    });


  });

</script>