
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
       <h3><small>Laman Tambah Data Stunting Pasien</small></h3>
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
                      <h2><small><span class="fa fa-plus-circle"></span> Form Tambah Data</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        
                        <li><a class="collapse-link"></i></a></li>
                        <li><a class="collapse-link"></i></a></li>
                        <li><a class="collapse-link"></i></a></li>
                        <li>
                        </li>
                        <li>
                        
                        </li>
              
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      </ul>
                    <div class="clearfix"></div>
                  </div>
            <div class="x_content">
                    <form method="post" action="<?php echo site_url('c_stunting/save_stunting');?>" class="form-horizontal form-label-left" id="demo-form" data-parsley-validate novalidate>
                      <br>
                      <p>
                        <div class='alert alert-info alert-dismissible fade in' role='alert'>

                             <i class="fa fa-info-circle"></i> <strong>Informasi</strong> <br>
                             <p>
                               NIK yang dimasukkan adalah NIK yang telah terdaftar sebagai pasien, Jika NIK belum terdaftar identitas pasien dan Data Checkup Pasien tidak akan muncul.
                             </p>

                           </div>
                      </p>
                     <hr/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK Pasien
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nik" class="form-control col-md-7 col-xs-12" name="nik" placeholder="Masukan NIK Pasien" type="text" required="required">
                          <span class="text-warning" id="nik_val"></span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_pasien">Nama Pasien
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_pasien" class="form-control col-md-7 col-xs-12" name="nama_pasien" placeholder="Get Nama Pasien" type="text" readonly>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jk">Jenis Kelamin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="jk" class="form-control col-md-7 col-xs-12" name="jk" placeholder="Get JK Pasien" type="text" readonly>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgllahir">Tanggal Lahir
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tgllahir" class="form-control col-md-7 col-xs-12" name="tgllahir" placeholder="Get Tanggal Lahir Pasien" type="text" readonly>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="umur">Umur Pasien
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="umur" class="form-control col-md-7 col-xs-12" name="umur" placeholder="Get Umur Pasien" type="text" readonly>
                          <span class="text-info" id="info"></span>
                        </div>
                      </div>

                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl">Tanggal <i>Checkup</i>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" id="myDatepicker" data-date-format="DD-MM-YYYY" class="form-control" name="tgl" required="" placeholder="DD-MM-YYYY" required readonly="" />
                        </div>
                      </div> -->

                      <br>
                      <p>
                        <div class='alert alert-info alert-dismissible fade in' role='alert'>

                             <i class="fa fa-info-circle"></i> <strong>Informasi</strong> <br>
                             <p>
                               Perhatikan setiap perubahan data yang dikirimkan oleh Alat Pendeteksi.
                             </p>

                           </div>
                      </p>
                     <hr/>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tinggi">Tinggi Badan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tinggi" class="form-control col-md-7 col-xs-12" name="tinggi_badan" placeholder="Masukan NIK terlebih dahulu" type="text" readonly="">
                          <span class="text-info" id="info_ukuran"></span>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tinggi">Berat Badan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="berat" class="form-control col-md-7 col-xs-12" name="berat_badan" placeholder="Masukan NIK terlebih dahulu" type="text" readonly="">
                          <span class="text-info" id="info_ukuran"></span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="keterangan" class="form-control col-md-7 col-xs-12" name="keterangan" placeholder="Masukan NIK terlebih dahulu" type="text" required=""></textarea>
                          <span class="text-info" id="info_keterangan"></span>
                        </div>
                      </div>
                                  

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">                        
                          <button id="simpan" type="submit" class="btn btn-success submit"><span class="glyphicon glyphicon-ok-circle"></span> Simpan</button>|
                          <button id="reset" class="btn btn-danger" type="button"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                        </div>
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
    $('#myDatepicker').datetimepicker();
    
    $("#nik").on("keyup", function(){
      check_nik();
    });
    function check_nik(){
      var temp_nik = $("#nik").val();
      var len = temp_nik.length;
      if(len>0 && len<16 || len==""){
        $("#myDatepicker").attr("disabled","disabled");
        $("#simpan").attr("disabled","disabled");
        $("#keterangan").attr("disabled","disabled");
        $("#nik_val").text("");
        $("#nama_pasien").val("");
        $("#jk").val("");
        $("#tgllahir").val("");
        $("#keterangan").html("");
        $("#info").text("");
        $("#tinggi").val("");
        
        $.ajax({
            type:'POST',
            url:"<?php echo site_url('c_ajax/simpan_kondisi'); ?>",
            data:{ status : 0},
            success: function(data)
            { 
            }
        }); 
        
      }else if(len>16 && len!=""){
        $("#nik_val").text("");
        $("#nik_val").text("Inputan anda melebihi jumlah Karakter NIK !");
        $("#myDatepicker").attr("disabled","disabled");
        $("#simpan").attr("disabled","disabled");
        $("#keterangan").attr("disabled","disabled");
        $("#nama_pasien").val("");
        $("#jk").val("");
        $("#tgllahir").val("");
        $("#keterangan").html("");
        $("#info").text("");
        $("#tinggi").val("");
        
        $.ajax({
            type:'POST',
            url:"<?php echo site_url('c_ajax/simpan_kondisi'); ?>",
            data:{status : 0},
            success: function(data)
            { 
            }
        }); 
        
      }else if(len==16 && len!=""){
        $.ajax({
            type:'POST',
            url:"<?php echo site_url('c_ajax/get_nama'); ?>",
            data:"nik=" + temp_nik,
            success: function(html)
            { 
                // $("#Area").html(html);
                var status = html;
                var str = status;
                var res = str.split("/");
                if(status != "Tidak ada data pada database"){
                  $("#nik_val").text("");
                  $("#nik_val").text("NIK Terdaftar !");
                  $("#nama_pasien").val(res[0]);
                  $("#jk").val(res[1]);
                  $("#tgllahir").val(res[2]);
                  $("#myDatepicker").val(res[3]);
                  $("#myDatepicker").removeAttr("disabled","disabled");
                  $("#simpan").removeAttr("disabled","disabled");

                  
                   $.ajax({
                      type:'POST',
                      url:"<?php echo site_url('c_ajax/simpan_kondisi'); ?>",
                      data:{status : 1},
                      success: function(data)
                      { 
                      }
                  }); 


                  setInterval(function(){

                  check_temp();
                  }, 300);
                  get_umur();
                  
                  
                }else{
                  $("#nama_pasien").val(status);
                  $("#jk").val(status);
                  $("#myDatepicker").attr("disabled","disabled");
                  $("#keterangan").attr("disabled","disabled");
                  $("#keterangan").html("");
                  $("#info").text("");
                  $("#tinggi").val("");
                }
            }
        }); 

      }else{
        $("#nik_val").text("");
        $("#nik_val").text("Inputan anda melebihi jumlah Karakter NIK !");
        $("#myDatepicker").attr("disabled","disabled");
        $("#simpan").attr("disabled","disabled");
        $("#keterangan").attr("disabled","disabled");
        $("#nama_pasien").val("");
        $("#jk").val("");
        $("#tgllahir").val("");
        $("#keterangan").html("");
        $("#info").text("");
        $("#tinggi").val("");
        
        $.ajax({
            type:'POST',
            url:"<?php echo site_url('c_ajax/simpan_kondisi'); ?>",
            data:{status : 0},
            success: function(data)
            { 
            }
        }); 
      }
    };

    function check_temp(){
      var id_temp = "id_temp";
      $.ajax({
          type:'POST',
          url:"<?php echo site_url('c_ajax/get_temp'); ?>",
          data:{id_temp:id_temp},
          success: function(html)
          { 

            // alert(html);
              // $("#Area").html(html);
              var status = html;
              var str = status;
              var res = str.split("/");
              var jk = $("#jk").val();
              var temp_nik = $("#nik").val();
              var nama = $("#nama_pasien").val();
              if(temp_nik == ""){
                $("#nama_pasien").val("");
                $("#jk").val("");
                $("#info_ukuran").text("");
                $("#info").text("");
              }

              if(status != "Tidak ada data pada database"){
                $("#id_temp").val(res[0]);
                $("#tinggi").val(res[2]);
                $("#berat").val(res[1]);
                $("#info_ukuran").text("Cm (Centimeter)");

                if(jk=='L'){
                  var umur = $("#umur").val();
                  var tinggi = $("#tinggi").val();
                  var ket;
                  if(tinggi<0){
                    $("#keterangan").prop("placeholder","Tinggi tidak terdefinisikan.");
                    $("#keterangan").prop("disabled",true);
                  }else{                  	
                    //Pengkondisian Secara Nyata
                    var info = $("#info").text();
                    // alert(info);
                    if (info == " Bulan"){

                        if((umur == 3) && (tinggi >= 57) && (tinggi < 65)){
                        ket = "Normal";
                        }else if((umur == 3) && (tinggi >= 55) && (tinggi < 57)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 3) && (tinggi < 55)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 3) && (tinggi >= 65) && (tinggi < 68)){
                          ket = "Tinngi";
                        }else if((umur == 3) && (tinggi >= 68)){
                          ket = "Over";
                        }

                        if((umur == 4) && (tinggi >= 61) && (tinggi < 68)){
                          ket = "Normal";
                        }else if((umur == 4) && (tinggi >= 58) && (tinggi < 60)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 4) && (tinggi < 58)){
                          ket = "Sangat Kurang (Stunting)"; 
                        }else if((umur == 4) && (tinggi >= 68) && (tinggi < 70)){
                          ket = "Tinggi";
                        }else if((umur == 4) && (tinggi >= 70)){
                          ket = "Over";
                        }

                        if((umur == 5) && (tinggi >= 62) && (tinggi < 70)){
                          ket = "Normal";
                        }else if((umur == 5) && (tinggi >= 60) && (tinggi < 62)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 5) && (tinggi < 60)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 5) && (tinggi >= 70) && (tinggi < 72)){
                          ket = "Tinggi";
                        }else if((umur == 5) && (tinggi >= 72)){
                          ket = "Over";
                        }

                        if((umur == 6) && (tinggi >= 63) && (tinggi < 72)){
                          ket = "Normal";
                        }else if((umur == 6) && (tinggi >= 61) && (tinggi < 63)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 6) && (tinggi < 61)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 6) && (tinggi >= 70) && (tinggi < 74)){
                          ket = "Tinggi";
                        }else if((umur == 6) && (tinggi >= 74)){
                          ket = "Over";
                        }

                        if((umur == 7) && (tinggi >= 65) && (tinggi < 73)){
                          ket = "Normal";
                        }else if((umur == 7) && (tinggi >= 63) && (tinggi < 65)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 7) && (tinggi < 65)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 7) && (tinggi >= 73) && (tinggi < 76)){
                          ket = "Tinggi";
                        }else if((umur == 7) && (tinggi >= 76)){
                          ket = "Over";
                        }

                        if((umur == 8) && (tinggi >= 66) && (tinggi < 75)){
                          ket = "Normal";
                        }else if((umur == 8) && (tinggi >= 64) && (tinggi < 66)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 8) && (tinggi < 64)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 8) && (tinggi >= 75) && (tinggi < 77)){
                          ket = "Tinggi";
                        }else if((umur == 8) && (tinggi >= 77)){
                          ket = "Over";
                        }

                         if((umur == 9) && (tinggi >= 67) && (tinggi < 76)){
                          ket = "Normal";
                        }else if((umur == 9) && (tinggi >= 65) && (tinggi < 67)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 9) && (tinggi < 65)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 9) && (tinggi >= 76) && (tinggi < 79)){
                          ket = "Tinggi";
                        }else if((umur == 9) && (tinggi >= 79)){
                          ket = "Over";
                        }

                        if((umur == 10) && (tinggi >= 69) && (tinggi < 78)){
                          ket = "Normal";
                        }else if((umur == 10) && (tinggi >= 66) && (tinggi < 69)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 10) && (tinggi < 66)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 10) && (tinggi >= 78) && (tinggi < 80)){
                          ket = "Tinggi";
                        }else if((umur == 10) && (tinggi >= 80)){
                          ket = "Over";
                        }

                        if((umur == 11) && (tinggi >= 70) && (tinggi < 79)){
                          ket = "Normal";
                        }else if((umur == 11) && (tinggi >= 67) && (tinggi < 70)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 11) && (tinggi < 67)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 11) && (tinggi >= 79) && (tinggi < 82)){
                          ket = "Tinggi";
                        }else if((umur == 11) && (tinggi >= 82)){
                          ket = "Over";
                        }

                        if((umur == 12) && (tinggi >= 71) && (tinggi < 80)){
                          ket = "Normal";
                        }else if((umur == 12) && (tinggi >= 68) && (tinggi < 71)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 12) && (tinggi < 68)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 12) && (tinggi >= 80) && (tinggi < 83)){
                          ket = "Tinggi";
                        }else if((umur == 12) && (tinggi >= 83)){
                          ket = "Over";
                        }

                        if((umur == 13) && (tinggi >= 72) && (tinggi < 82)){
                          ket = "Normal";
                        }else if((umur == 13) && (tinggi >= 70) && (tinggi < 72)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 13) && (tinggi < 70)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 13) && (tinggi >= 82) && (tinggi < 84)){
                          ket = "Tinggi";
                        }else if((umur == 13) && (tinggi >= 84)){
                          ket = "Over";
                        }

                        if((umur == 14) && (tinggi >= 73) && (tinggi < 83)){
                          ket = "Normal";
                        }else if((umur == 14) && (tinggi >= 71) && (tinggi < 73)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 14) && (tinggi < 71)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 14) && (tinggi >= 83) && (tinggi < 85)){
                          ket = "Tinggi";
                        }else if((umur == 14) && (tinggi >= 85)){
                          ket = "Over";
                        }

                        if((umur == 15) && (tinggi >= 74) && (tinggi < 84)){
                          ket = "Normal";
                        }else if((umur == 15) && (tinggi >= 72) && (tinggi < 74)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 15) && (tinggi < 72)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 15) && (tinggi >= 84) && (tinggi < 87)){
                          ket = "Tinggi";
                        }else if((umur == 15) && (tinggi >= 87)){
                          ket = "Over";
                        }

                        if((umur == 16) && (tinggi >= 75) && (tinggi < 85)){
                          ket = "Normal";
                        }else if((umur == 16) && (tinggi >= 73) && (tinggi < 75)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 16) && (tinggi < 73)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 16) && (tinggi >= 85) && (tinggi < 88)){
                          ket = "Tinggi";
                        }else if((umur == 16) && (tinggi >= 88)){
                          ket = "Over";
                        }

                        if((umur == 17) && (tinggi >= 76) && (tinggi < 86)){
                          ket = "Normal";
                        }else if((umur == 17) && (tinggi >= 73) && (tinggi < 76)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 17) && (tinggi < 73)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 17) && (tinggi >= 86) && (tinggi < 89)){
                          ket = "Tinggi";
                        }else if((umur == 17) && (tinggi >= 89)){
                          ket = "Over";
                        }

                        if((umur == 18) && (tinggi >= 77) && (tinggi < 87)){
                          ket = "Normal";
                        }else if((umur == 18) && (tinggi >= 74) && (tinggi < 77)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 18) && (tinggi < 74)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 18) && (tinggi >= 87) && (tinggi < 90)){
                          ket = "Tinggi";
                        }else if((umur == 18) && (tinggi >= 90)){
                          ket = "Over";
                        }

                         if((umur == 19) && (tinggi >= 78) && (tinggi < 89)){
                          ket = "Normal";
                        }else if((umur == 19) && (tinggi >= 75) && (tinggi < 78)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 19) && (tinggi < 75)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 19) && (tinggi >= 89) && (tinggi < 91)){
                          ket = "Tinggi";
                        }else if((umur == 19) && (tinggi >= 91)){
                          ket = "Over";
                        }

                        if((umur == 20) && (tinggi >= 79) && (tinggi < 90)){
                          ket = "Normal";
                        }else if((umur == 20) && (tinggi >= 76) && (tinggi < 79)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 20) && (tinggi < 76)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 20) && (tinggi >= 90) && (tinggi < 93)){
                          ket = "Tinggi";
                        }else if((umur == 20) && (tinggi >= 93)){
                          ket = "Over";
                        }

                        if((umur == 21) && (tinggi >= 79) && (tinggi < 91)){
                          ket = "Normal";
                        }else if((umur == 21) && (tinggi >= 77) && (tinggi < 79)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 21) && (tinggi < 77)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 21) && (tinggi >= 91) && (tinggi < 94)){
                          ket = "Tinggi";
                        }else if((umur == 21) && (tinggi >= 94)){
                          ket = "Over";
                        }

                        if((umur == 22) && (tinggi >= 80) && (tinggi < 92)){
                          ket = "Normal";
                        }else if((umur == 22) && (tinggi >= 77) && (tinggi < 80)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 22) && (tinggi < 77)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 22) && (tinggi >= 92) && (tinggi < 95)){
                          ket = "Tinggi";
                        }else if((umur == 22) && (tinggi >= 95)){
                          ket = "Over";
                        }

                        if((umur == 23) && (tinggi >= 81) && (tinggi < 93)){
                          ket = "Normal";
                        }else if((umur == 23) && (tinggi >= 78) && (tinggi < 81)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 23) && (tinggi < 78)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 23) && (tinggi >= 93) && (tinggi < 96)){
                          ket = "Tinggi";
                        }else if((umur == 23) && (tinggi >= 96)){
                          ket = "Over";
                        }

                        if((umur == 24) && (tinggi >= 82) && (tinggi < 94)){
                          ket = "Normal";
                        }else if((umur == 24) && (tinggi >= 79) && (tinggi < 82)){
                          ket = "Kurang (Stunting)";
                        }else if((umur == 24) && (tinggi < 79)){
                          ket = "Sangat Kurang (Stunting)";
                        }else if((umur == 24) && (tinggi >= 94) && (tinggi < 97)){
                          ket = "Tinggi";
                        }else if((umur == 24) && (tinggi >= 97)){
                          ket = "Over";
                        }

                        $("#keterangan").prop("disabled",false);
                    } else if(info=" Tahun") {
                      ket='Umur tidak terdefinisikan. Cek Stunting (Bayi umur 3-24 bulan)';
                      $("#keterangan").prop("disabled",true);
                    }     
                  }

                  //$("#keterangan").html("Status Pertumbuhan : "+ket);
                  //alert(ket);
                  if(ket == undefined){
                    $("#info_keterangan").text("Tidak terdefinisi");
                    $("#keterangan").html("");
                    $("#keterangan").prop("placeholder","Tinggi tidak terdefinisikan. Cek Stunting (Bayi umur 3-24 bulan).");
                    $("#keterangan").prop("disabled",true);
                  }else{  
                    $("#keterangan").html("Status Pertumbuhan : "+ket);
                    $("#info_keterangan").text("");
                  }
                }

                else if(jk=="P"){
                  var umur = $("#umur").val();
                  var tinggi = $("#tinggi").val();
                  var ket;
                  if(tinggi<0){
                    $("#keterangan").prop("placeholder","Tinggi tidak terdefinisikan.");
                    $("#keterangan").prop("disabled",true);
                  }else{ 
                    var info = $("#info").text();
                    // alert(info);
                    if (info == " Bulan"){
                      if((umur == 3) && (tinggi >= 56) && (tinggi < 64)){
                        ket = "Normal";
                      }else if((umur == 3) && (tinggi >= 53) && (tinggi < 56)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 3) && (tinggi < 53)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 3) && (tinggi >= 64) && (tinggi < 66)){
                        ket = "Tinngi";
                      }else if((umur == 3) && (tinggi >= 66)){
                        ket = "Over";
                      }

                      if((umur == 4) && (tinggi >= 58) && (tinggi < 66)){
                        ket = "Normal";
                      }else if((umur == 4) && (tinggi >= 55) && (tinggi < 58)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 4) && (tinggi < 55)){
                        ket = "Sangat Kurang (Stunting)"; 
                      }else if((umur == 4) && (tinggi >= 66) && (tinggi < 69)){
                        ket = "Tinggi";
                      }else if((umur == 4) && (tinggi >= 69)){
                        ket = "Over";
                      }

                      if((umur == 5) && (tinggi >= 60) && (tinggi < 68)){
                        ket = "Normal";
                      }else if((umur == 5) && (tinggi >= 57) && (tinggi < 60)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 5) && (tinggi < 57)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 5) && (tinggi >= 68) && (tinggi < 71)){
                        ket = "Tinggi";
                      }else if((umur == 5) && (tinggi >= 71)){
                        ket = "Over";
                      }

                      if((umur == 6) && (tinggi >= 61) && (tinggi < 70)){
                        ket = "Normal";
                      }else if((umur == 6) && (tinggi >= 59) && (tinggi < 61)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 6) && (tinggi < 59)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 6) && (tinggi >= 70) && (tinggi < 73)){
                        ket = "Tinggi";
                      }else if((umur == 6) && (tinggi >= 73)){
                        ket = "Over";
                      }

                      if((umur == 7) && (tinggi >= 63) && (tinggi < 72)){
                        ket = "Normal";
                      }else if((umur == 7) && (tinggi >= 60) && (tinggi < 63)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 7) && (tinggi < 60)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 7) && (tinggi >= 72) && (tinggi < 74)){
                        ket = "Tinggi";
                      }else if((umur == 7) && (tinggi >= 74)){
                        ket = "Over";
                      }

                      if((umur == 8) && (tinggi >= 64) && (tinggi < 73)){
                        ket = "Normal";
                      }else if((umur == 8) && (tinggi >= 62) && (tinggi < 64)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 8) && (tinggi < 62)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 8) && (tinggi >= 73) && (tinggi < 76)){
                        ket = "Tinggi";
                      }else if((umur == 8) && (tinggi >= 76)){
                        ket = "Over";
                      }

                       if((umur == 9) && (tinggi >= 65) && (tinggi < 75)){
                        ket = "Normal";
                      }else if((umur == 9) && (tinggi >= 63) && (tinggi < 65)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 9) && (tinggi < 63)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 9) && (tinggi >= 75) && (tinggi < 77)){
                        ket = "Tinggi";
                      }else if((umur == 9) && (tinggi >= 77)){
                        ket = "Over";
                      }

                      if((umur == 10) && (tinggi >= 66) && (tinggi < 76)){
                        ket = "Normal";
                      }else if((umur == 10) && (tinggi >= 64) && (tinggi < 66)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 10) && (tinggi < 64)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 10) && (tinggi >= 76) && (tinggi < 79)){
                        ket = "Tinggi";
                      }else if((umur == 10) && (tinggi >= 79)){
                        ket = "Over";
                      }

                      if((umur == 11) && (tinggi >= 68) && (tinggi < 78)){
                        ket = "Normal";
                      }else if((umur == 11) && (tinggi >= 65) && (tinggi < 68)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 11) && (tinggi < 65)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 11) && (tinggi >= 78) && (tinggi < 80)){
                        ket = "Tinggi";
                      }else if((umur == 11) && (tinggi >= 80)){
                        ket = "Over";
                      }

                      if((umur == 12) && (tinggi >= 69) && (tinggi < 79)){
                        ket = "Normal";
                      }else if((umur == 12) && (tinggi >= 66) && (tinggi < 69)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 12) && (tinggi < 66)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 12) && (tinggi >= 79) && (tinggi < 82)){
                        ket = "Tinggi";
                      }else if((umur == 12) && (tinggi >= 82)){
                        ket = "Over";
                      }

                      if((umur == 13) && (tinggi >= 70) && (tinggi < 80)){
                        ket = "Normal";
                      }else if((umur == 13) && (tinggi >= 67) && (tinggi < 70)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 13) && (tinggi < 67)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 13) && (tinggi >= 80) && (tinggi < 83)){
                        ket = "Tinggi";
                      }else if((umur == 13) && (tinggi >= 83)){
                        ket = "Over";
                      }

                      if((umur == 14) && (tinggi >= 71) && (tinggi < 82)){
                        ket = "Normal";
                      }else if((umur == 14) && (tinggi >= 68) && (tinggi < 71)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 14) && (tinggi < 68)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 14) && (tinggi >= 82) && (tinggi < 84)){
                        ket = "Tinggi";
                      }else if((umur == 14) && (tinggi >= 84)){
                        ket = "Over";
                      }

                      if((umur == 15) && (tinggi >= 72) && (tinggi < 83)){
                        ket = "Normal";
                      }else if((umur == 15) && (tinggi >= 69) && (tinggi < 72)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 15) && (tinggi < 69)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 15) && (tinggi >= 83) && (tinggi < 86)){
                        ket = "Tinggi";
                      }else if((umur == 15) && (tinggi >= 86)){
                        ket = "Over";
                      }

                      if((umur == 16) && (tinggi >= 73) && (tinggi < 84)){
                        ket = "Normal";
                      }else if((umur == 16) && (tinggi >= 70) && (tinggi < 73)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 16) && (tinggi < 70)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 16) && (tinggi >= 84) && (tinggi < 87)){
                        ket = "Tinggi";
                      }else if((umur == 16) && (tinggi >= 87)){
                        ket = "Over";
                      }

                      if((umur == 17) && (tinggi >= 74) && (tinggi < 85)){
                        ket = "Normal";
                      }else if((umur == 17) && (tinggi >= 71) && (tinggi < 74)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 17) && (tinggi < 71)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 17) && (tinggi >= 85) && (tinggi < 88)){
                        ket = "Tinggi";
                      }else if((umur == 17) && (tinggi >= 88)){
                        ket = "Over";
                      }

                      if((umur == 18) && (tinggi >= 75) && (tinggi < 86)){
                        ket = "Normal";
                      }else if((umur == 18) && (tinggi >= 72) && (tinggi < 75)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 18) && (tinggi < 72)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 18) && (tinggi >= 86) && (tinggi < 89)){
                        ket = "Tinggi";
                      }else if((umur == 18) && (tinggi >= 89)){
                        ket = "Over";
                      }

                      if((umur == 19) && (tinggi >= 76) && (tinggi < 87)){
                        ket = "Normal";
                      }else if((umur == 19) && (tinggi >= 73) && (tinggi < 76)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 19) && (tinggi < 73)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 19) && (tinggi >= 87) && (tinggi < 91)){
                        ket = "Tinggi";
                      }else if((umur == 19) && (tinggi >= 91)){
                        ket = "Over";
                      }

                      if((umur == 20) && (tinggi >= 77) && (tinggi < 89)){
                        ket = "Normal";
                      }else if((umur == 20) && (tinggi >= 74) && (tinggi < 77)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 20) && (tinggi < 74)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 20) && (tinggi >= 89) && (tinggi < 92)){
                        ket = "Tinggi";
                      }else if((umur == 20) && (tinggi >= 92)){
                        ket = "Over";
                      }

                      if((umur == 21) && (tinggi >= 78) && (tinggi < 90)){
                        ket = "Normal";
                      }else if((umur == 21) && (tinggi >= 74) && (tinggi < 78)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 21) && (tinggi < 74)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 21) && (tinggi >= 90) && (tinggi < 93)){
                        ket = "Tinggi";
                      }else if((umur == 21) && (tinggi >= 93)){
                        ket = "Over";
                      }

                      if((umur == 22) && (tinggi >= 78) && (tinggi < 91)){
                        ket = "Normal";
                      }else if((umur == 22) && (tinggi >= 75) && (tinggi < 78)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 22) && (tinggi < 75)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 22) && (tinggi >= 91) && (tinggi < 94)){
                        ket = "Tinggi";
                      }else if((umur == 22) && (tinggi >= 94)){
                        ket = "Over";
                      }

                      if((umur == 23) && (tinggi >= 79) && (tinggi < 92)){
                        ket = "Normal";
                      }else if((umur == 23) && (tinggi >= 76) && (tinggi < 79)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 23) && (tinggi < 76)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 23) && (tinggi >= 92) && (tinggi < 95)){
                        ket = "Tinggi";
                      }else if((umur == 23) && (tinggi >= 95)){
                        ket = "Over";
                      }

                      if((umur == 24) && (tinggi >= 80) && (tinggi < 93)){
                        ket = "Normal";
                      }else if((umur == 24) && (tinggi >= 77) && (tinggi < 80)){
                        ket = "Kurang (Stunting)";
                      }else if((umur == 24) && (tinggi < 77)){
                        ket = "Sangat Kurang (Stunting)";
                      }else if((umur == 24) && (tinggi >= 93) && (tinggi < 96)){
                        ket = "Tinggi";
                      }else if((umur == 24) && (tinggi >= 96)){
                        ket = "Over";
                      }

                      $("#keterangan").prop("disabled",false);
                    } else if(info=" Tahun") {
                      ket='Umur tidak terdefinisikan. Cek Stunting (Bayi umur 3-24 bulan)';
                      $("#keterangan").prop("disabled",true);
                    }     
                  }
                }

                  if(ket == undefined){
                    $("#info_keterangan").text("Tidak terdefinisi");
                    $("#keterangan").html("");
                    $("#keterangan").prop("placeholder","Tinggi tidak terdefinisikan. Cek Stunting (Bayi umur 3-24 bulan).");
                    $("#keterangan").prop("disabled",true);
                  }else{  
                    $("#keterangan").html("Status Pertumbuhan : "+ket);
                    $("#info_keterangan").text("");
                  }

              }else if(status != "Tidak ada data pada database" && nama == ""){
                $("#tinggi").val("");
                $("#info_ukuran").text("");
                // $("#info").text("");
              }else{
                $("#tinggi").val("Tidak Ada Data Pada DB");
                $("#info_ukuran").text("");
                $("#keterangan").prop("placeholder","Tinggi Badan Tidak Terdefinisikan.");
                $("#keterangan").prop("disabled",true);
                // $("#info").text("");
              }
          }
      }); 

    }

    function get_umur(){
      var tgl = $("#tgllahir").val();
      var trim = tgl.split("-");

      var tahunLahir = trim[0];
      var bulanLahir = trim[1];
      var tanggalLahir = trim[2];

      var tahunSekarang=<?php echo date('Y');?>;
      var bulanSekarang=<?php echo date('m');?>;
      var tanggalSekarang=<?php echo date('d');?>;

      var umur = tahunSekarang - tahunLahir;

      // if(tgl==""){
      //   $("#umur").val("");
      // }else if(bulanLahir >= bulanSekarang && tanggalLahir > tanggalSekarang){
      //   $("#umur").val(umur-1);
      //   $("#info").text(" Tahun");
        
      // }else if(bulanLahir < bulanSekarang && tanggalLahir<=tanggalSekarang){
      //   $("#umur").val(umur);
      //   $("#info").text(" Tahun");
        
      // }else{
      //   $("#umur").val(umur);
      //   $("#info").text(" Tahun");
        
      // }

      // if(umur == 0){
      //   umurBln = bulanSekarang - bulanLahir;
      //   $("#umur").val(umurBln);
      //   $("#info").text(" Bulan");

        
      // }
      if (umur==0){
          umurBln = 1;
          $("#umur").val(umurBln);
          $("#info").text(" Bulan");
          $("#simpan").attr("disabled","disabled");

      }
      if(umur >0 && umur == 1) {
        if (tahunSekarang>tahunLahir) {
          if (bulanSekarang == bulanLahir) {
            umurBln = 12;
            $("#umur").val(umurBln);
            $("#info").text(" Bulan");
          }
          else if (bulanSekarang>bulanLahir) {
            if (tanggalSekarang==tanggalLahir) {
              umurBln = (bulanSekarang + 13) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }else if (tanggalSekarang > tanggalLahir) {
              umurBln = (bulanSekarang + 12) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
            else if(tanggalSekarang < tanggalLahir) {
              umurBln = (bulanSekarang + 12) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
          }
          else if (bulanSekarang<bulanLahir) {
            if (tanggalSekarang==tanggalLahir) {
              umurBln = (bulanSekarang + 13) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }else if (tanggalSekarang > tanggalLahir) {
              umurBln = (bulanSekarang + 12) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
            else if(tanggalSekarang < tanggalLahir) {
              umurBln = (bulanSekarang + 12) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
          }
        }
      }
      else if(umur > 1 && umur <= 2){
        if (tahunSekarang>tahunLahir) {
          if (bulanSekarang == bulanLahir) {
            umurBln = 24;
            $("#umur").val(umurBln);
            $("#info").text(" Bulan");
          }
          else if (bulanSekarang>bulanLahir) {
            umurBln = bulanSekarang - bulanLahir;
            $("#umur").val(umurBln);
            $("#info").text(" Bulan");
          }
          else if (bulanSekarang<bulanLahir) {
            if (bulanLahir == 12) {
              if (tanggalSekarang>=tanggalLahir) {
              umurBln = (bulanSekarang + 24) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }

            }
            else if (tanggalSekarang>=tanggalLahir) {
              umurBln = (bulanSekarang + 23) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
            else {
              umurBln = (bulanSekarang + 22) - bulanLahir;
              $("#umur").val(umurBln);
              $("#info").text(" Bulan");
            }
          }
        }
      }


      else if (umur>2) {
        if(tgl==""){
        $("#umur").val("");
      }else if(bulanLahir >= bulanSekarang && tanggalLahir > tanggalSekarang){
        $("#umur").val(umur-1);
        $("#info").text(" Tahun");
        
      }else if(bulanLahir < bulanSekarang && tanggalLahir<=tanggalSekarang){
        $("#umur").val(umur);
        $("#info").text(" Tahun");
        
      }else{
        $("#umur").val(umur);
        $("#info").text(" Tahun");
        
      }

      }

  }

});
</script>

<script>
    $(function(){
       
        $("#reset").click(function(){
          $.ajax({
                      type:'POST',
                      url:"<?php echo site_url('c_ajax/hapus_kondisi'); ?>",
                      data:{status : 0},
                      success: function(data)
                      {
                          $("#myDatepicker").attr("disabled","disabled");
                          $("#simpan").attr("disabled","disabled");
                          $("#keterangan").attr("disabled","disabled");
                          $("#nik_val").text("");
                          $("#nama_pasien").val("");
                          $("#jk").val("");
                          $("#tgllahir").val("");
                          $("#keterangan").html("");
                          $("#info").text("");
                          $("#tinggi").val("");
                          $("#myDatepicker").val("");
                          $("#nik").val("");
                          $("#umur").val("");
                          $("#demo-form").trigger('reset');
                      }
                  });
        });
        
    });
    
</script>


