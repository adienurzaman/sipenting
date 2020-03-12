<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class C_stunting extends CI_Controller 

{

  function __construct()

  {

    parent::__construct();

    $this->load->model('m_stunting');

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

      $data['stunting'] = $this->m_stunting->get_data();    

      $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      $data['firstname'] = strtoupper($data['namadepan'][0]);

       if($this->session->userdata('bahasa')=='english'){


        $data['tampilan'] = 'stunting_en';

      } else {

        $data['tampilan'] = 'stunting';
      }


      //new

      

      $this->load->view('template/media', $data);

    }

  }


 

  public function riwayat()

  {

    $level = $this->session->userdata('level');

    $nkk = $this->session->userdata('nkk');

    if($level == 'pasien' || $level == 'admin'){

     
      $data['stunting'] = $this->m_stunting->get_data_pasien($nkk);      
    }

    $data['session'] = $this->session->all_userdata();

    $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);


      if($this->session->userdata('bahasa')=='english'){


    $data['tampilan'] = 'riwayat_en';

      } else {

        $data['tampilan'] = 'riwayat';
      }


    //new

    

    $this->load->view('template/media', $data);

  }  


  

  public function add_stunting()

  {

    $level = $this->session->userdata('level');
    
    if($level == 'admin'){

      $data['session'] = $this->session->all_userdata();

      $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

      $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

      $data['firstname'] = strtoupper($data['namadepan'][0]);


       if($this->session->userdata('bahasa')=='english'){


        $data['tampilan'] = 'tambahstunting_en';

      } else {

        $data['tampilan'] = 'tambahstunting';
      }


      //new

      $this->load->view('template/media', $data);

    }

  }



  public function detail_stunting()

  {

    $data['session'] = $this->session->all_userdata();

    $id_stunting = $this->uri->segment(3);

    $this->input->post('id');
    
    $this->db->set('status','1');
    
    $this->db->where('id_stunting',$id_stunting);
    
    $this->db->update('stunting');

    $data['detail'] = $this->m_stunting->get_data_detail($id_stunting); 

    $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);


       if($this->session->userdata('bahasa')=='english'){


        $data['tampilan'] = 'detailstunting_en';

      } else {

        $data['tampilan'] = 'detailstunting';
      }


    

    $this->load->view('template/media', $data);

  }



  public function save_stunting()

  {

    $data['session'] = $this->session->all_userdata();

    $data['namalengkap'] =strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);

  



    if($this->m_stunting->simpan())

    {

      //load notifikasi sukses

      $this->session->set_flashdata('simpan_berhasil','Data baru berhasil ditambahkan');

      redirect('c_stunting');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('simpan_gagal','Data baru gagal ditambahkan');

      redirect('c_stunting');

    }

  } 

  

  public function hapus_stunting()

  {

    $data['session'] = $this->session->all_userdata();

    $id_stunting = $this->uri->segment(3);

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //panggil query hapus di model

    

    if($this->m_stunting->hapus($id_stunting)){

      $this->session->set_flashdata('hapus_berhasil','Data tersebut berhasil didelete');

     redirect('c_stunting');



    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Data tersebut gagal didelete');

      redirect('c_stunting');

    } 

  }



  public function delete_stunting()

  {

    $data['session'] = $this->session->all_userdata();

    $id_stunting = $this->input->post('id_stunting');

    $data['namalengkap'] = strtoupper($this->session->userdata('nama'));

    $data['namadepan'] = explode(' ',$this->session->userdata('nama'));

    $data['firstname'] = strtoupper($data['namadepan'][0]);



    //panggil query hapus di model

    if(empty($id_stunting)){

  //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Tidak ada Data yang terseleksi');

      redirect('c_stunting');

    }

    if($this->m_stunting->hapusseleksi()){

      $this->session->set_flashdata('hapus_berhasil','Data tersebut berhasil didelete');

      redirect('c_stunting');

    }else{

      //load notifikasi gagal

      $this->session->set_flashdata('hapus_gagal','Data tersebut gagal didelete');

      redirect('c_stunting');

    } 

  }





}

