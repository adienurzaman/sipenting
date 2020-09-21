<?php

if($this->session->flashdata('login_berhasil')==TRUE){

?>

<body onload="new PNotify({



    title:'Login Berhasil',



    type: 'success',



    text: '<?php echo $this->session->flashdata('login_berhasil'); ?>',



    nonblock: {



        nonblock: true



    },



    styling: 'bootstrap3',



    addclass: 'dark'



});">



</body>



<?php     

}



$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

$hari = date("w");

$hari_ini = $seminggu[$hari];

?>



<div class="right_col" role="main">

  <div class="x_panel">

    <div class="x_title">

      <h2>Dashboard</h2>

      <ul class="nav navbar-right panel_toolbox">

        <li><a class="collapse-link"></i></a></li>

        <li><a class="collapse-link"></i></a></li>

        <li><a class="collapse-link"></i></a></li>

        <li></li>

        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>

      </ul>

      <div class="clearfix"></div>

    </div>

    <div class="x_content">

      <h4>Selamat Datang di Sistem Pengidentifikasi Balita Stunting</h4>

      <br/>

      <p align=center>Hai <b><?php echo ucwords($session['level']);?></b>, selamat datang di halaman Dashboard SIPENTING. 

        <br/>Silahkan klik menu untuk mengelola sistem Aplikasi Ini. <br /> <b><?php echo $hari_ini;?>, <?php echo date('d-m-Y');?></b>

      </p>

    </div>

  </div>



<?php if($session['level']=='admin'){?>

  <div class="row top_tiles">

    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <div class="tile-stats">

        <div class="icon"><i class="fa fa-users"></i></div>

        <div class="count"><?php echo @$jml_pasien;?></div>

          <h3>Data Pasien</h3>

      </div>

    </div>

   
    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <div class="tile-stats">

        <div class="icon"><i class="fa fa-child"></i></div>

        <div class="count"><?php echo @$jml_stunting; ?></div>

        <h3>Data Cek Stunting</h3>

      </div>

    </div>
  </div>

    



<?php } 
else{
?>
 <div class="row top_tiles">

    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <div class="tile-stats">

        <div class="icon"><i class="fa fa-child"></i></div>

        <div class="count" id="tinggi"></div>

          <h3>Tinggi</h3>

      </div>

    </div>

   
    <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">

      <div class="tile-stats">

        <div class="icon"><i class="fa fa-users"></i></div>

        <div class="count" id="berat"></div>

        <h3>Berat</h3>

      </div>

    </div>
  </div>
  
  <p>
    <div class='alert alert-info alert-dismissible fade in hideElement' id="penanganan" role='alert'>

         <i class="fa fa-info-circle"></i> <strong>Anak Anda Terindikasi Gejala Dini Stunting</strong> <br>
         <p>
           Berikut ini cara penanganan Stunting pada Balita: <br>
           1. Mendorong penerusan pemberian ASI hingga usia 23 bulan didampingi oleh pemberian MP – ASI.<br>
           2. Menyediakan obat cacing. <br>
           3. Menyediakan suplementasi zink. <br>
           4. Melakukan fortifikasi zat besi ke dalam makanan. <br>
           5. Memberikan perlindungan terhadap malaria. <br>
           6. Memberikan imunisasi lengkap. <br>
           7. Melakukan pencegahan dan pengobatan diare. <br>
           <br>

           Note :<br>
           1. Memantau pertumbuhan Balita di posyandu merupakan upaya yang sangat strategis untuk mendeteksi dini terjadinya gangguan pertumbuhan. <br>
           2. Perilaku Hidup Bersih dan Sehat (PHBS) harus diupayakan oleh setiap rumah tangga termasuk meningkatkan akses terhadap air bersih dan fasilitas sanitasi, serta menjaga kebersihan lingkungan. <br>

           lakukan checkup secara berkala.
         </p>
       </div>
  </p>

  <div id="area_hasil">
    
  </div>
<?php
} 
?>

<div class="clearfix"></div>

<div class="clearfix"></div>




</div>

<script type="text/javascript">
  $(function() {
    setInterval(function(){
      tampil_hasil();
      tampil_keterangan();
      get_tinggi_berat();

    },1500);
    function tampil_hasil() {
      var nkk = "<?php echo $session['nkk']; ?>";

      $.ajax({
        url:"<?php echo site_url('c_ajax/tampil_hasil_checkup'); ?>",
        type:"POST",
        cache:false,
        data:{
          nkk:nkk
        }, 
        success:function(data){
          $("#area_hasil").html(data);
        }

      });
    }

    function tampil_keterangan(){
      var nkk = "<?php echo $session['nkk']; ?>";

      $.ajax({
        url:"<?php echo site_url('c_ajax/get_status'); ?>",
        type:"POST",
        cache:false,
        data:{
          nkk:nkk
        }, 
        success:function(data){
          // alert(data);
         if((data == "Status Pertumbuhan : Kurang (Stunting)") || (data == "Status Pertumbuhan : Sangat Kurang (Stunting)")) {
          $("#penanganan").show();
         }else{
          $("#penanganan").hide();
         }
        }

      });
    }

    function get_tinggi_berat(){
      var nkk = "<?php echo $session['nkk']; ?>";

      $.ajax({
        url:"<?php echo site_url('c_ajax/get_tinggi_berat'); ?>",
        type:"POST",
        cache:false,
        data:{
          nkk:nkk
        }, 
        success:function(data){
          // alert(data);
          var str=data.split("/");
          $("#tinggi").text(str[0]);
          $("#berat").text(str[1]);

        }

      });
    }


  });
</script>