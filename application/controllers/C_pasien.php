<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class C_pasien extends CI_Controller 

{

  function __construct()

  {

    parent::__construct();

    $this->load->model('m_pasien');

    if(!$this->session->userdata('nik'))

    {

      redirect('c_login');

    }

  }



  public function index()

  {

    $level = $this->session->userdata('level');
    
    if($level == 'admin'){

      $data['session'] = $this->session->all_userdata();

      $data['pasien'] = $this->m_pasien->get_data();    

      $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      $data['firstname'] = strtoupper($data['namadepan'][0]);


       if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'pasien_en';

      } else {

           $data['tampilan'] = 'pasien';
      }


      //new      

      $this->load->view('template/media', $data);
    }

  }

  



  public function tambah()

  {

    $level = $this->session->userdata('level');
    
    if($level == 'admin'){

      $data['session'] = $this->session->all_userdata();

      $data['provinsi'] = $this->m_pasien->getdataProvinsi();



      $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      $data['firstname'] = strtoupper($data['namadepan'][0]);


        if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'tambahpasien_en';

      } else {

           $data['tampilan'] = 'tambahpasien';
      }


      //new

      $this->load->view('template/media', $data);

    }   

  }

  //function input data

  public function simpan()

  {

    $data['session'] = $this->session->all_userdata();

    $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);

  



    //query simpan data staff

    if($this->m_pasien->simpan())

    {

      //load notifikasi sukses

      $this->session->set_flashdata('simpan_berhasil','Data baru berhasil ditambahkan');

      redirect('c_pasien','refresh');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('simpan_gagal','Data baru gagal ditambahkan');

      redirect('c_pasien','refresh');

    }

  } 

  //ubah

  public function ubah()

  {

    $level = $this->session->userdata('level');
    
    if($level == 'admin'){

      $nik = $this->uri->segment(3);

      $data['pasien'] = $this->m_pasien->get_dataupdate($nik);

      $data['session'] = $this->session->all_userdata();

      $data['provinsi'] = $this->m_pasien->getdataProvinsi();

      $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      $data['firstname'] = strtoupper($data['namadepan'][0]);


        if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'ubahpasien_en';

      } else {

           $data['tampilan'] = 'ubahpasien';
      }

   
      //new

      $this->load->view('template/media', $data);

    }    

  }

  public function prosesubah()

  {

   $data['session'] = $this->session->all_userdata();

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //Jika update data sukses

    if($this->m_pasien->ubah())

    {

      //load notifikasi sukses

      $this->session->set_flashdata('edit_berhasil','Data tersebut berhasil diperbaharui');

      redirect('c_pasien','refresh');



    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('edit_gagal','Data tersebut gagal diperbaharui');

      redirect('c_pasien','refresh');

    }

  }

  

  //function hapus

  public function hapus()

  {

    $data['session'] = $this->session->all_userdata();

    $nik = $this->uri->segment(3);

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //panggil query hapus di model

    

    if($this->m_pasien->hapus($nik)){

      $this->session->set_flashdata('hapus_berhasil','Data tersebut berhasil didelete');

      redirect('c_pasien','refresh');



    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Data tersebut gagal didelete');

      redirect('c_pasien','refresh');

    } 

  }



  public function delete()

  {

    $data['session'] = $this->session->all_userdata();

    $nik = $this->input->post('nik');

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //panggil query hapus di model

    if(empty($nik)){

  //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Tidak ada Data yang terseleksi');

      redirect('c_pasien','refresh');

    }

    if($this->m_pasien->hapusseleksi()){

      $this->session->set_flashdata('hapus_berhasil','Data tersebut berhasil didelete');

      redirect('c_pasien','refresh');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Data tersebut gagal didelete');

      redirect('c_pasien','refresh');

    } 

  }

  public function delete_checkup()

  {

    $data['session'] = $this->session->all_userdata();

    $kd_antrian = $this->input->post('kd_antrian');

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //panggil query hapus di model

    if(empty($kd_antrian)){

  //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Tidak ada Data yang terseleksi');

      redirect('c_pasien/checkup','refresh');

    }

    if($this->m_pasien->hapus_checkup()){

      $this->session->set_flashdata('hapus_berhasil','Data tersebut berhasil didelete');

      redirect('c_pasien/checkup','refresh');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Data tersebut gagal didelete');

      redirect('c_pasien/checkup','refresh');

    } 

  }

  public function import()
  {
    $data['session'] = $this->session->all_userdata();

    $nik = $this->uri->segment(3);

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);


    require_once(APPPATH . 'third_party/excel_reader.php');

    // membaca file excel yang diupload
    $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name'][0]);

    if(!is_readable($sFileName)) {
        $this->error = 1;
        return false;
    }

    // membaca jumlah baris dari data excel
    $baris = $data->rowcount($sheet_index=0);
     
    // import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
    for ($i=2; $i<=$baris; $i++)
    {
      // membaca data Pada kolom ke-2)
      $nkk = $data->val($i, 2);

      $nik = $data->val($i, 3);

      $nama_pasien  = $data->val($i, 4);

      $tgllahir = $data->val($i, 5);

      $jk  = $data->val($i, 6);

      $blok  = $data->val($i, 7);

      $provinsi  = $data->val($i, 8);

      $kabupaten  = $data->val($i, 9);

      $kecamatan  = $data->val($i, 10);

      $kelurahan  = $data->val($i, 11);

      $notelp  = $data->val($i, 12);

      $email  = $data->val($i, 13);
    }
    

    if($this->m_pasien->import($nik,$nkk,$nama_pasien,$tgllahir,$jk,$blok,$provinsi,$kabupaten,$kecamatan,$kelurahan,$notelp,$email))
    {

      $this->session->set_flashdata('simpan_berhasil','Data baru berhasil ditambahkan');

      redirect('c_pasien','refresh');



    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('simpan_gagal','Data baru gagal ditambahkan');

      redirect('c_pasien','refresh');

    } 

  }

  public function checkup()
  {
  	$level = $this->session->userdata('level');

    if($level == 'admin'){

   	  	$data['session'] = $this->session->all_userdata();

        $data['regis'] = $this->m_pasien->getregis();

      	$data['provinsi'] = $this->m_pasien->getdataProvinsi();

      	$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      	$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      	$data['firstname'] = strtoupper($data['namadepan'][0]);

          if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'checkup_en';

      } else {

           $data['tampilan'] = 'checkup';
      }


      	$this->load->view('template/media', $data);

    }
  }

public function validasiregis()
  {
    $level = $this->session->userdata('level');

    if($level == 'admin'){

        $kd_antrian=$this->uri->segment(3);

         if($this->m_pasien->validasiregis($kd_antrian)){

      $this->session->set_flashdata('validasi_success','Data tersebut berhasil divalidasi');

      redirect('c_pasien/checkup','refresh');



    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('validasi_failed','Data tersebut gagal divalidasi');

      redirect('c_pasien/checkup','refresh');

    } 

    }
  }


  public function regis_checkup()
  {
  	$level = $this->session->userdata('level');

    if($level == 'pasien'){

        // $nik = $this->session->userdata('nik');

        $nkk = $this->session->userdata('nkk');

        $data['status'] = $this->m_pasien->getstatusadd($nkk);

        $data['regis'] = $this->m_pasien->getdataregis($nkk);

   	  	$data['session'] = $this->session->all_userdata();

      	$data['provinsi'] = $this->m_pasien->getdataProvinsi();

      	$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      	$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      	$data['firstname'] = strtoupper($data['namadepan'][0]);

      

          if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'tampil_regis_pasien_en';

      } else {

            $data['tampilan'] = 'tampil_regis_pasien';
      }


      	$this->load->view('template/media', $data);

    }

  }


  public function add_regis()
  {
    $level = $this->session->userdata('level');

    if($level == 'pasien'){

        $nkk = $this->session->userdata('nkk');

        $data['session'] = $this->session->all_userdata();

        $data['regis'] = $this->m_pasien->get_data_nik_by_nkk($nkk);

        $data['provinsi'] = $this->m_pasien->getdataProvinsi();

        $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

        $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

        $data['firstname'] = strtoupper($data['namadepan'][0]);

        

          if($this->session->userdata('bahasa')=='english'){


            $data['tampilan'] = 'regis_checkup_en';

      } else {

            $data['tampilan'] = 'regis_checkup';
      }


        $this->load->view('template/media', $data);

    }

  }

  public function simpan_regis()
 {

    $data['session'] = $this->session->all_userdata();

    $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);

  



    //query simpan data staff

    if($this->m_pasien->simpancheckup())

    {

      //load notifikasi sukses

      $this->session->set_flashdata('simpan_berhasil','Data baru berhasil ditambahkan');

      redirect('c_pasien/regis_checkup','refresh');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('simpan_gagal','Data baru gagal ditambahkan');

      redirect('c_pasien/regis_checkup','refresh');

    }

  }

  public function cetak_invoice()
  {
    $level = $this->session->userdata('level');
    if($level == 'pasien'){
      $kd_antrian = $this->uri->segment(3);
      $data_cetak = $this->m_pasien->data_cetak($kd_antrian);
      if(empty($data_cetak)){
         $this->session->set_flashdata('gagal_cetak','Data yang anda inginkan belum terdapat di database. Export Tidak Berhasil');
          
        redirect('c_pasien/regis_checkup','refresh');
      }
    else{

        ?>
    <?php 
    ob_start();?>

    <html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css');?>" rel="stylesheet" type="text/css" >
    <style>
    .tengah{
      text-align:center;
    }
    .kiri{
      text-align:left;
    }
    .kanan{
      text-align:right;

    }
    .h1{
      font-size: 65%;
    }
    </style>
    </head><body>
      <!--CONTOH Code START-->
      <div class="tengah">
       <img src="<?php echo base_url('build/images/ulala.png');?>"  align="center"  >
     </div>
      <?php $value = date('Y-m-d');
            $tgl = date_create($value);
            $hasil = date_format($tgl,'d-m-Y');?>  
      <p style="text-align: center;"><strong>KARTU ANTRIAN SICAKET</strong></p>
<p style="text-align: center;"><strong>SISTEM PENCATATAN KESEHATAN</strong></p>
<p style="text-align: center;">Tanggal Terbit : <?php echo $hasil; ?></p>
    <hr style="height:4px;" />

    <br>
    <h4 class="tengah"><font face="arial"><b><u>DATA PASIEN</u></b></font></h4>

    <br><br>
    <div class="x_content">
        <div class="table-responsive">
        <table>
          <tbody>
            <tr>
              <td>
                <strong>Nomor Antrian</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['kd_antrian'])?$data_cetak[0]['kd_antrian']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>NIK</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['nik'])?$data_cetak[0]['nik']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>NKK</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['nkk'])?$data_cetak[0]['nkk']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Nama Pasien</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['nama_pasien'])?$data_cetak[0]['nama_pasien']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Jenis Kelamin</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo($data_cetak[0]['jk']=='L')?'Laki-laki':'Perempuan';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Tanggal Lahir</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['tgllahir'])?$data_cetak[0]['tgllahir']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                ----------------------------------------
              </td>
              <td>
                ---
              </td>
              <td>
                -----------------------------
              </td>
            </tr>
            <tr>
              <td>
                <strong>Tanggal Checkup</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['tanggal'])?$data_cetak[0]['tanggal']:'';?>
              </td>
            </tr>
            <tr>
              <td>
                <strong>Waktu Kedatangan</strong>
              </td>
              <td>
                 &nbsp;:&nbsp;
              </td>
              <td>
                &nbsp;<?php echo isset($data_cetak[0]['waktu_datang'])?$data_cetak[0]['waktu_datang']:'';?>
              </td>
            </tr>

             <tr>
              <td>
               
              </td>
              <td>
              </td>
              <td>
             
              </td>
            </tr>
          </tbody>

        </table>
        <br>
        <br>
              *Bawalah kartu ini ketika hendak melakukan checkup.
          
    	</div>
    </div>
    </body></html>

        <?php
        $html = ob_get_contents();
        ob_end_clean();
        $nama_dokumen='Cetak_Kartu_Antrian_SICAKET';
        require_once(APPPATH . 'third_party/mpdf60/mpdf.php');
        $mpdf=new mPDF('utf-8', 'A4-P');
        $mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHTML(utf8_encode($html));
        $mpdf->Output($nama_dokumen.".pdf" ,'I');
        exit;

      }
    }
  }

}

