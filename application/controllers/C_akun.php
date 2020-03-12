<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_akun extends CI_Controller {

	function __construct()

	{

		parent::__construct();

		$this->load->model('m_akun');

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

		$data['akun'] = $this->m_akun->get_data();

		$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

		$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

		$data['firstname'] = strtoupper($data['namadepan'][0]);

		if($this->session->userdata('bahasa')=='english'){


		$data['tampilan'] = 'akun_en';

			} else {

				$data['tampilan'] = 'akun';
			}


		$this->load->view('template/media', $data);

	}

	}



	public function change_pass()

	{

		$data['session'] = $this->session->all_userdata();

		$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

		$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

		$data['firstname'] = strtoupper($data['namadepan'][0]);

		if($this->session->userdata('bahasa')=='english'){


		$data['tampilan'] = 'ganti_password_en';

			} else {

				$data['tampilan'] = 'ganti_password';
			}



		$this->load->view('template/media', $data);

	}

	public function change_acc()

	{

		$data['session'] = $this->session->all_userdata();

		$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

		$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

		$data['firstname'] = strtoupper($data['namadepan'][0]);

		$data['tampilan'] = 'ganti_identitas';

		if($this->session->userdata('bahasa')=='english'){


		$data['tampilan'] = 'ganti_identitas_en';

			} else {

				$data['tampilan'] = 'ganti_identitas';
			}





		$this->load->view('template/media', $data);

	}



	public function gantiPassword()

	{

		$nik = $this->session->userdata('nik');

		//query simpan data staff

	    if($this->m_akun->gantiPassword($nik))

	    {

	      //load notifikasi sukses

	      $this->session->set_flashdata('ubah_berhasil','Password Berhasil Di ubah');

	    ?>

	      <script>alert('Ganti Password Berhasil. Session Akan di hapus, silahkan login kembali');</script>

	    <?php

	      $this->session->sess_destroy();

		  redirect('c_login','refresh');



	    }else{

	      //load notifikasi gagal

	      $this->session->set_flashdata('ubah_gagal','Password Gagal Di ubah');

	      redirect('c_gantipassword','refresh');

	    }

	}



	public function reset_pass()

	{

		$nik = $this->uri->segment(3);



	    if($this->m_akun->reset_pass($nik))

	    {

	      //load notifikasi sukses

	      $this->session->set_flashdata('edit_berhasil','Password Berhasil Di Reset');

		  redirect('c_akun','refresh');



	    }else{

	      //load notifikasi gagal

	      $this->session->set_flashdata('edit_berhasil','Password Gagal Di Reset');

	      redirect('c_akun','refresh');

	    }

	}



	public function change_level()

	{

		$nik = $this->uri->segment(3);

		$level = $this->uri->segment(4);



		$query = "UPDATE akun SET 

                  level = '$level'

                  WHERE nik='$nik'"; 

        if($this->db->query($query)){

        	//load notifikasi sukses

	      	$this->session->set_flashdata('ubah_level_sukses','Level User Berhasil Diubah');

		  	redirect('c_akun','refresh');

        }else{

        	//load notifikasi gagal

	      	$this->session->set_flashdata('ubah_level_gagal','Level User Berhasil Diubah');

		  	redirect('c_akun','refresh');

        }

	}


public function language()

	{
		$bahasa = $this->input->post('bahasa');
		if($bahasa=='english'){
			$this->session->set_userdata(array('bahasa' => 'english'));
			echo '1';
		}elseif($bahasa=='indonesian'){
			$this->session->set_userdata(array('bahasa' => 'indonesian'));
			echo '1';
		} else {
			echo "0";
		}
    }

public function profil()
	{
		$level = $this->session->userdata('level');
    
    if($level == 'admin'){

		$data['session'] = $this->session->all_userdata();

		$data['namalengkap'] =strtoupper($this->session->userdata('nama'));

		$data['namadepan'] = explode(' ',$this->session->userdata('nama'));

		$data['firstname'] = strtoupper($data['namadepan'][0]);
		$data['tampilan'] = 'profil';
		

		$this->load->view('template/media', $data);
	}

	}



}



