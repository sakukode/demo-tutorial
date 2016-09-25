<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	public function index() 
	{
		$this->load->view('pages/validation-jquery-validate');
	}

	public function save()
	{
		echo json_encode(array('status'=> TRUE, 'message' => 'Form sudah diisi dengan lengkap dan benar'));
	}
}

/* application/controllers/Validation.php */