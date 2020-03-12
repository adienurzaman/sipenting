<?php 

  if($session['level'] == "admin"){

?>



<!-- sidebar menu -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">

    <h3>Mainmenu</h3>

    <ul class="nav side-menu">

      <li><a href="<?php echo site_url('c_dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>

      <li><a href="<?php echo site_url('c_pasien'); ?>"><i class="fa fa-users"></i> Olah Data Pasien</a></li>

      <li><a href="<?php echo site_url('c_akun'); ?>"><i class="fa fa-user"></i> Olah Data Akun</a></li> 

      <li><a href="<?php echo site_url('c_stunting'); ?>"><i class="fa fa-child"></i> Olah Data Stunting</a></li>

    </ul>

  </div>





  <div class="menu_section">

    <h3>Setting</h3>

    <ul class="nav side-menu">

      <li><a href="<?php echo site_url('c_akun/change_acc'); ?>"><i class="fa fa-cogs"></i> Ubah Identitas Akun</a></li>

      <li><a href="<?php echo site_url('c_akun/change_pass'); ?>"><i class="fa fa-cog"></i> Ubah Password Akun</a></li>

    </ul>

  </div>



</div>

<!-- /sidebar menu -->



<?php  

  }else{

?>



<!-- sidebar menu -->

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">

    <h3>MAINMENU</h3>

    <ul class="nav side-menu">

      <li><a href="<?php echo site_url('c_dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>

      <li><a href="<?php echo site_url('c_stunting/riwayat'); ?>"><i class="fa fa-history"></i> Data Riwayat Checkup</a></li>

    </ul>

  </div>

    <div class="menu_section">

    <h3>Setting</h3>

    <ul class="nav side-menu">

      <li><a href="<?php echo site_url('c_akun/change_acc'); ?>"><i class="fa fa-cogs"></i> Ubah Identitas Akun</a></li>

      <li><a href="<?php echo site_url('c_akun/change_pass'); ?>"><i class="fa fa-cog"></i> Ubah Password Akun</a></li>

    </ul>

  </div>



</div>

<!-- /sidebar menu -->



<?php  

  }

?>