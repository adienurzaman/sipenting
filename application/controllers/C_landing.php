<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_landing extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['session'] = $this->session->all_userdata();
		$data['namalengkap'] =strtoupper($this->session->userdata('nama'));
		$data['namadepan'] = explode(' ',$this->session->userdata('nama'));
		$data['firstname'] = strtoupper($data['namadepan'][0]);

		if(empty($this->session->userdata('bahasa'))){
			$this->session->set_userdata(array('bahasa' => 'indonesian'));
		}


       if($this->session->userdata('bahasa')=='english'){


       $this->load->view('landing_en');

      } else {

        $this->load->view('landing');
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

}

