<?php

class M_stunting extends CI_Model 

{

    function __construct()

    {

        parent::__construct();

    }


  function get_data()

    {

    $query = $this->db->query("SELECT A.*, A.nik as nik, B.nkk as nkk, B.nama_pasien  as nama_pasien, B.tgllahir as tgllahir FROM stunting as A LEFT JOIN pasien as B on B.nik = A.nik ORDER BY A.tgl DESC");

    foreach ($query->result_array() as $row) {

      $array[] = $row;

    }

    if (!isset($array)) { 

      $array='';

    }

    $query->free_result();

    return $array;

  }

  function get_data_pasien($nkk)

    {

    $query = $this->db->query("SELECT A.*, A.nik as nik, B.nkk as nkk, B.nama_pasien  as nama_pasien, B.tgllahir as tgllahir FROM stunting as A LEFT JOIN pasien as B on B.nik = A.nik WHERE B.nkk = '$nkk'  ORDER BY A.tgl DESC");

    foreach ($query->result_array() as $row) {

      $array[] = $row;

    }

    if (!isset($array)) { 

      $array='';

    }

    $query->free_result();

    return $array;

  }


  function hapusseleksi()

    {
     
     $id_stunting = $this->input->post('id_stunting');
     $this->db->where_in('id_stunting', $id_stunting);
     $this->db->delete('stunting');

     return true;

    }

  
  function hapus($id_stunting)

    {
     
     $this->db->where_in('id_stunting', $id_stunting);
     $this->db->delete('stunting');

     return true;

    }


  function simpan()

    {

    $CI =& get_instance();

    $CI->load->database('default');

    $nik = $this->input->post('nik');

    if(!empty($nik))

    {

        $nik = $this->input->post('nik');
        
        $umur = $this->input->post('umur');

        #konversi date
        $tgl = date('Y-m-d');

        $tinggi_badan = $this->input->post('tinggi_badan');
        $berat_badan = $this->input->post('berat_badan');
        $keterangan = $this->input->post('keterangan');

      //insert

        $sql1 = "INSERT INTO stunting (nik, umur, tinggi_badan, berat_badan, tgl, keterangan) VALUES ('$nik','$umur','$tinggi_badan','$berat_badan','$tgl', '$keterangan')";

        $this->db->query($sql1);

        return true;

    }

    else

    {

    return false; 

    }

    }

  function get_data_detail($id_stunting)
  {

    $query = $this->db->query("SELECT A.*, B.*, D.nama as provinsi, E.nama as kabupaten, F.nama as kecamatan, G.nama as kelurahan
      FROM stunting as A
      LEFT JOIN pasien as B on B.nik = A.nik 
      LEFT JOIN provinsi as D on D.id_prov=B.provinsi
      LEFT JOIN kabupaten as E on E.id_kab=B.kabupaten
      LEFT JOIN kecamatan as F on F.id_kec=B.kecamatan
      LEFT JOIN kelurahan as G on G.id_kel=B.kelurahan 
      WHERE A.id_stunting = $id_stunting");

    foreach ($query->result_array() as $row) {

      $array[] = $row;

    }

    if (!isset($array)) { 

      $array='';

    }

    $query->free_result();

    return $array;

  }


}