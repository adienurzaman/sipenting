<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_api extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pasien');
    }

    /**
        Pada Controller C_api ini terdapat 
        banyak fungsi yang digunakan untuk proses komunikasi 
        data dengan user atau dengan alat sebelum login atau session less.
    */

    
    //fungsi untuk kebutuhan pendaftaran user
    function kabupaten(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $id_prov = $this->input->post('id_prov');
            $kabupaten   = $this->db->get_where('kabupaten',array('id_prov'=>$id_prov));
            
            echo "<div id='kab'>";
            echo "<select id='kabupaten' onChange='loadKecamatan()' class='form-control'  name='kabupaten'>";
            echo "<OPTION value=''>-- Pilih Kabupaten --</OPTION>";
            foreach ($kabupaten->result() as $k)
            {
                $str= strtolower($k->nama);
                $str2=ucwords($str);
                echo "<option value='$k->id_kab'>$str2</option>";
            }
            echo "</select></div><br>";
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }
    
    //fungsi untuk kebutuhan pendaftaran user
    function kecamatan(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $id_kab = $this->input->post('id_kab');
            $kecamatan   = $this->db->get_where('kecamatan',array('id_kab'=>$id_kab));
            echo "<div id='kec'>";
            echo "<select id='kecamatan' onChange='loadKelurahan()' class='form-control'  name='kecamatan'>";
            echo "<OPTION value=''>-- Pilih Kecamatan --</OPTION>";
            foreach ($kecamatan->result() as $k)
            {
                echo "<option value='$k->id_kec'>$k->nama</option>";
            }
            echo "</select></div><br>";
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }
    
    //fungsi untuk kebutuhan pendaftaran user
    function kelurahan(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $id_kec  = $this->input->post('id_kec');
            $kelurahan = $this->db->get_where('kelurahan',array('id_kec'=>$id_kec));

            echo "<div id='kel'>";
            echo "<select id='kelurahan' class='form-control'  name='kelurahan'>";
            echo "<OPTION value=''>-- Pilih Kelurahan --</OPTION>";
            foreach ($kelurahan->result() as $k)
            {
                echo "<option value='$k->id_kel'>$k->nama</option>";
            }
            echo "</select></div><br>";
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }


    /**
    public function temp()

    Simpan data sensor yg berhasil terkirim 
    Data yang dikirimkan dan disimpan ke database adalah :
    1. Data hasil pendeteksian Berat
    2. Data hasil pendeteksian Tinggi Anak (Balita)
    
    **/

   //API untuk merequest 
    public function temp()
    {
        
       if ($this->input->server('REQUEST_METHOD') == 'POST') {
            
            $tinggi_anak = $this->input->post('tinggi_anak');
            $berat = $this->input->post('berat');
           
            if(!empty($tinggi_anak)){
                $query = "UPDATE temp SET berat='$berat', tinggi_anak='$tinggi_anak' WHERE id_temp = '1'";
                $q=$this->db->query($query);
                if ($q) {
                    # code...
                    $result['success'] = "1";
                    $result['message'] = "success";
                
                    echo json_encode($result);
                }
            }
            
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
              
    }


    /**
    public function tampil_kondisi()

    Kirim data ke alat sebagai acuan STOP ACTION dan START ACTION

    **/

    //API acuan pendeteksian sensor dimulai
    public function tampil_kondisi()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $id = $this->input->post('id_kondisi');
            $this->db->from('kondisi');
            $this->db->order_by('id_kondisi','desc');
            $this->db->limit(1);
            $query = $this->db->get();
            foreach ($query->result_array() as $row) {
                $array = $row;
            }
            if (!isset($array)) 
            { 
                $array='';
            }

            if($array != ''){
               echo $array['status'];
            }else{
               echo "Tidak Ada Data Pada DB";
            }

        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }

    // edit kondisi
    public function edit_kondisi()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $id = $this->input->post('kondisi');
            $this->db->set('status',$id);
            $this->db->where('id_kondisi','1');
            $update=$this->db->update('kondisi');
            if ($update) {
                $result['success'] = "1";
                $result['message'] = "success";
        
                echo json_encode($result);
            }
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }

    public function check_nik(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');
            $this->db->from('akun');
            $this->db->where('nik',$temp_nik);
            $this->db->limit(1);
            $query = $this->db->get();
            foreach ($query->result_array() as $row) {
                $array = $row;
            }
            if (!isset($array)) 
            { 
                $array='';
            }

            if($array != ''){
               echo $respon = "1/".$array['email'];
            }else{
               echo $respon = "0/".$array['email'];
            }

        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }

    }

    public function check_email(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_email = $this->input->post('email');
            $this->db->from('akun');
            $this->db->where('email',$temp_email);
            $this->db->limit(1);
            $query = $this->db->get();
            foreach ($query->result_array() as $row) {
                $array = $row;
            }
            if (!isset($array)) 
            { 
                $array='';
            }

            if($array != ''){
               $respon = 1;
               echo json_encode($respon);
            }else{
               $respon = 0;
               echo json_encode($respon);
            }

        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }

    }

    /**
    public function mail()

    Kirim data Reset Password ke Email yang berelasi dengan NIK Pasien (user)

    **/
    public function mail($email, $nik){
        if (!empty($email)) {
            
            // Konfigurasi email
            $config = [
                   'mailtype'  => 'html',
                   'charset'   => 'utf-8',
                   'protocol'  => 'smtp',
                   'smtp_host' => 'ssl://mail.windstandrobotic.org',
                   'smtp_user' => 'sipenting@windstandrobotic.org',    
                   'smtp_pass' => 'adie@181097',                  
                   'smtp_port' => '465',
                   'crlf'      => "\r\n",
                   'newline'   => "\r\n"
               ];

            // Load library email dan konfigurasinya
            $this->load->library('email',$config);

            // $this->email->initialize($config);

            // Email dan nama pengirim
            $this->email->from('sipenting@windstandrobotic.org', '[no-reply] Developer | SIPENTING');

            // Email penerima
            $this->email->to($email); 

            // Lampiran email, isi dengan url/path file
            // $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

            // Subject email
            $this->email->subject('RESET PASSWORD | SIPENTING');

            $this->email->message("NIK Anda : ".$nik.", Password Baru Anda : <b>admin12345</b>. <br> Setelah berhasil Login segera lakukan Perubahan Password Kembali. Password yang dikirimkan adalah password Default. <br><br> Terimakasih. Hormat Kami Dev SIPENTING.");

            if ($this->email->send()) {
                return true;
            } else {
                return false;
            }
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }
    }

    /**
    public function forgot()

    Proses penanganan LUPA KATA SANDI

    **/
    public function forgot(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $nik = $this->input->post('nik');
            // $nohp = $this->input->post('nohp');
            $email = $this->input->post('email');
            
            if($this->mail($email, $nik) == true){

                if($nik!=''){
                  $passwordBaru = md5("admin12345");
                  $query = "UPDATE akun SET 
                  password = '$passwordBaru'
                  WHERE nik='$nik'"; 
                  if($this->db->query($query)){
                    $respon = 1;
                    echo json_encode($respon);
                  }else{
                    $respon = 0;
                    echo json_encode($respon); 
                  }
                }

            }else{
              $respon = 0;
               echo json_encode($respon); 
            }
        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }

    }

}