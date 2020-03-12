<?php
class C_ajax extends CI_Controller 
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
    

    function kabupaten(){
        $id_prov = $this->input->post('id_prov');
        $kabupaten   = $this->db->get_where('kabupaten',array('id_prov'=>$id_prov));
        
        echo "<div class='item form-group' id='kab'>";
        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12'>*Kabupaten </label>";
        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
        echo "<select id='kabupaten' onChange='loadKecamatan()' class='form-control'  name='kabupaten'>";
        echo "<OPTION value=''>-- Pilih Kabupaten --</OPTION>";
        foreach ($kabupaten->result() as $k)
        {
            $str= strtolower($k->nama);
            $str2=ucwords($str);
            echo "<option value='$k->id_kab'>$str2</option>";
        }
        echo "</select></div></div>";
    }
    
    function kecamatan(){
        $id_kab = $this->input->post('id_kab');
        $kecamatan   = $this->db->get_where('kecamatan',array('id_kab'=>$id_kab));
        echo "<div class='item form-group' id='kec'>";
        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12'>*Kecamatan </label>";
        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
        echo "<select id='kecamatan' onChange='loadKelurahan()' class='form-control'  name='kecamatan'>";
        echo "<OPTION value=''>-- Pilih Kecamatan --</OPTION>";
        foreach ($kecamatan->result() as $k)
        {
            echo "<option value='$k->id_kec'>$k->nama</option>";
        }
        echo "</select></div></div>";
    }
    
    function kelurahan(){
        $id_kec  = $this->input->post('id_kec');
        $kelurahan = $this->db->get_where('kelurahan',array('id_kec'=>$id_kec));

        echo "<div class='item form-group' id='kel'>";
        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12'>*Kelurahan </label>";
        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
        echo "<select id='kelurahan' class='form-control'  name='kelurahan'>";
        echo "<OPTION value=''>-- Pilih Kelurahan --</OPTION>";
        foreach ($kelurahan->result() as $k)
        {
            echo "<option value='$k->id_kel'>$k->nama</option>";
        }
        echo "</select></div></div>";
    }

    function temp_password(){
        $nik = $this->session->userdata('nik');
        $temp_password = md5($this->input->post('temp_password'));

        $this->db->from('akun');
        $this->db->where('nik',$nik);
        $this->db->where('password',$temp_password);
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $array = $row;
        }
        if (!isset($array)) 
        { 
            $array='';
        }

        if(!empty($array)){
            echo "benar";
        }else{
           echo "salah";
        }
    }

    function get_nama(){
        $temp_nik = $this->input->post('nik');
        $status1='ya';
        $tgl_skrng = date('Y-m-d');
        
        $sql="SELECT p.nama_pasien as nama_pasien, 
            p.jk as jk, p.tgllahir as tgllahir
            FROM pasien as p
            WHERE p.nik='$temp_nik' ";

        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row) {
            $array = $row;
        }
        if (!isset($array)) 
        { 
            $array='';
        }

        if(!empty($array)){
            echo $array['nama_pasien'].'/'.$array['jk'].'/'.$array['tgllahir'];
        }else{
           echo "Tidak ada data pada database";
        }
    }

    function tampil_unread (){
       $nkk=$this->input->post('nkk');

       $this->db->from('stunting s');
       $this->db->join('pasien p','p.nik=s.nik','left');
       $this->db->where('p.nkk',$nkk);
       $this->db->where('s.status','0');
       $query=$this->db->get();
       if($query){
            echo $query->num_rows();
       }else{
            echo "0";
       }
    }

    function tampil_hasil_checkup(){
        $nkk=$this->input->post('nkk');

        $this->db->select('s.tgl tgl, s.id_stunting id_stunting, s.keterangan keterangan, s.nik nik, p.nkk nkk, p.nama_pasien nama_pasien');
        $this->db->from('stunting s');
        $this->db->join('pasien p','p.nik=s.nik','left');
        $this->db->where('p.nkk',$nkk);
        $this->db->order_by('id_stunting','desc');
        $this->db->limit(5);
        $query=$this->db->get();

        foreach ($query->result() as $data) {
            # code...
            if ($data->keterangan == 'Status Pertumbuhan : Kurang (Stunting)') {
                $thema = "alert-warning";
            }  
            if ($data->keterangan == 'Status Pertumbuhan : Over') {
                $thema = "alert-danger";
            }  
            if ($data->keterangan == 'Status Pertumbuhan : Normal') {
                $thema = "alert-success";
            }
            if ($data->keterangan == 'Status Pertumbuhan : Tinggi') {
                $thema = "alert-success";
            }  
            if ($data->keterangan == 'Status Pertumbuhan : Sangat Kurang (Stunting)') {
                $thema = "alert-danger";
            }  
        echo"
        <a href='".site_url('c_stunting/detail_stunting/'.$data->id_stunting)."'>
        <p>
            <div class='alert ".$thema." alert-dismissible fade in' role='alert'><i class='fa fa-info-circle'></i> 
            <strong> HASIL CHECKUP : ".$data->tgl."</strong> <br>
            ".$data->nama_pasien. " telah melaksanakan checkup dengan hasil chekup : ".$data->keterangan.".

            </div>

        </p>
            </a>";
        } 

    }

     function get_status(){
        $nkk=$this->input->post('nkk');

        $this->db->select('s.tgl tgl, s.id_stunting id_stunting, s.keterangan keterangan, s.nik nik, p.nkk nkk, p.nama_pasien nama_pasien');
        $this->db->from('stunting s');
        $this->db->join('pasien p','p.nik=s.nik','left');
        $this->db->where('p.nkk',$nkk);
        $this->db->order_by('id_stunting','desc');
        $this->db->limit(5);
        $query=$this->db->get();

        $row = $query->row();
        echo $row->keterangan;

    }

    function get_tinggi_berat(){
        $nkk=$this->input->post('nkk');

        $this->db->select('s.tinggi_badan tinggi_badan, s.berat_badan berat_badan');
        $this->db->from('stunting s');
        $this->db->join('pasien p','p.nik=s.nik','left');
        $this->db->where('p.nkk',$nkk);
        $this->db->order_by('id_stunting','desc');
        $this->db->limit(1);
        $query=$this->db->get();

        if($query) {
            $row = $query->row();
            if(empty($row->tinggi_badan) && empty($row->berat_badan)){
                echo "0/0";
            }else{
                echo $row->tinggi_badan."/".$row->berat_badan;
            }
        }   

    }


    function tampil_notif(){
        $nkk=$this->input->post('nkk');

        $this->db->select('s.status status, s.tgl tgl, s.id_stunting id_stunting, s.keterangan keterangan, s.nik nik, p.nkk nkk, p.nama_pasien nama_pasien');
        $this->db->from('stunting s');
        $this->db->join('pasien p','p.nik=s.nik','left');
        $this->db->where('p.nkk',$nkk);
        $this->db->order_by('id_stunting','desc');
        $this->db->limit(5);
        $query=$this->db->get();
        foreach ($query->result() as $data) {
            # code...
            echo "<input class='id_stunting' name='id_stunting' type='hidden' value='".$data->id_stunting."'>";
            echo "<a class='btn_klik' href='".site_url('c_stunting/detail_stunting/'.$data->id_stunting)."'>";
            echo "<li>";
                echo "<span>";
                  echo "<span style='color:black'>Checkup : ".$data->tgl." </span>";
                    if ($data->status == '0'){
                      echo "<span class='time' style='color:black;padding-left:85px;'><strong>  Unread</strong></span>";
                    }
                echo "</span><br>";
                echo "<span class='message' style='color:black'>";
                echo " Klik/sentuh pesan ini untuk melihat detail hasil checkup";
                echo "</span>";
                echo "</li>";
            echo "</a>";
        } 

    }

    function get_temp(){
        $temp = $this->input->post('id_temp');

        $this->db->from('temp');
        $this->db->order_by($temp.' desc');
        $this->db->limit(1);
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $array = $row;
        }
        if (!isset($array)) 
        { 
            $array='';
        }

        if(!empty($array)){
            echo $array['id_temp'].'/'.$array['berat'].'/'.$array['tinggi_anak'];
        }else{
           echo "Tidak ada data pada database";
        }
    }

    function check_nik(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');
            $this->db->from('pasien');
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
               $respon = 1;
               echo json_encode($respon);
            }else{
               $respon = 0;
               echo json_encode($respon);
            }

        }

    }

    function check_email(){
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
        }

    }
    
    function simpan_kondisi()
    {
        
        $status = $this->input->post('status');
        
        if($status == 1 || $status == 0)
        {
            $sql = " UPDATE kondisi SET status = '$status'  WHERE id_kondisi = '1' ";
            $this->db->query($sql);
            return true;
        }else{
          return false; 
        }
    }

    function get_data_kondisi()
    {
        if(!empty($this->input->post('id_kondisi'))){

            $id = $this->input->post('id_kondisi');

            $this->db->from('kondisi');
            $this->db->order_by($id.' desc');
            $this->db->limit(1);
            $query = $this->db->get();

            foreach ($query->result_array() as $row) {
              $array = $row;
            }
            if (!isset($array)) { 
              $array='';
            }

            if(!empty($array)){
                echo $array['id_kondisi'];
            }else{
               echo "Tidak ada data pada database";
            }
        }else{
            echo "error, NOT POST";
        }
    }

    function hapus_kondisi()
    {
        
        $status = $this->input->post('status');
        
        if($status == 1 || $status == 0)
        {
            $sql = " UPDATE kondisi SET status = '$status'  WHERE id_kondisi = '1' ";
            $this->db->query($sql);
            return true;
        }else{
          return false; 
        }
    }


    function get_identitas()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');

            $this->db->select('a.email email, p.notelp notelp');
            $this->db->from('akun a');
            $this->db->join('pasien p', 'p.nik = a.nik', 'left');
            $this->db->where('a.nik', $temp_nik);
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
               echo $respon = "1/".$array['email']."/".$array['notelp'];
            }else{
               echo $respon = "0/".$array['email']."/".$array['notelp'];
            }
        }
    }

    function change_email()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');
            $temp_email = $this->input->post('email');
            $query = "UPDATE akun SET 
                  email = '$temp_email'
                  WHERE nik='$temp_nik'"; 
            if($this->db->query($query)){
                $respon = 1;
                echo json_encode($respon);
            }else{
                $respon = 0;
                echo json_encode($respon); 
            }
        }
    }


    function change_notelp()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');
            $temp_notelp = $this->input->post('notelp');
            $query = "UPDATE pasien SET 
                  notelp = '$temp_notelp'
                  WHERE nik='$temp_nik'"; 
            if($this->db->query($query)){
                $respon = 1;
                echo json_encode($respon);
            }else{
                $respon = 0;
                echo json_encode($respon); 
            }
        }
    }

    function get_all_nik()
    {   

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
           $id = $this->input->post('id');

            $this->db->from('pasien');
            $query = $this->db->get();
           foreach ($query->result_array() as $key) {
            if($key != ''){
             $respon[] = $key;
             echo json_encode($respon);
            }else{
              $respon = "0";
              echo json_encode($respon);
            }

           }
            
        }
    }

    function generate_kd_antrian()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

           $tempTanggal = date_create($this->input->post('tanggal'));
           $tempTgl = date_format($tempTanggal,'Ymd');
           $tempTgl1 = date_format($tempTanggal,'Y-m-d');
           
           $this->db->select('RIGHT(antrian.kd_antrian,2) AS kd_antrian', FALSE);
           $this->db->where('antrian.tanggal',$tempTgl1);
           $this->db->order_by('kd_antrian','DESC');
           $this->db->limit(1);

           $query = $this->db->get('antrian');
           if($query->num_rows() <> 0){
            $data = $query->row();
            $kd = intval($data->kd_antrian) + 1;
           }else{
            $kd = 1;
           }

           $tgl=$tempTgl;
           $batas = str_pad($kd, 3, "0", STR_PAD_LEFT);
           $kd_tampil = "SK"."T".$tgl.$batas."/".$batas;

           echo $kd_tampil;

        }else{
            $respon = array('status' => 'error' );
            echo json_encode($respon);
        }
    }


    function check_nik_by_nkk(){
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $temp_nik = $this->input->post('nik');
            $temp_nkk = $this->input->post('nkk');
            $this->db->from('pasien');
            $this->db->where('nik',$temp_nik);
            $this->db->where('nkk',$temp_nkk);
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
               echo $respon = "1/".$array['nama_pasien'];
            }else{
               echo $respon = "0/".$array['nama_pasien'];
            }

        }else{
            $result['success'] = "0";
            $result['message'] = "error";
        
            echo json_encode($result);
            redirect('c_login','refresh');
        }

    }

    function get_data_pasien(){
        $data_pasien = $this->m_pasien->get_data();
        $callback = array(
            'data'=>$data_pasien
        );
        header('Content-Type: application/json');
        echo json_encode($callback);
    }
    

}