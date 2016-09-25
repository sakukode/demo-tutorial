<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Demo_captcha extends CI_Controller
{

    public function index()
    {
        $this->load->library(array('recaptcha', 'form_validation'));
        $this->load->helper('form');

        // Set rule/aturan validasi
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_get_response_captcha');

        $this->form_validation->set_message('required', '%s harus diisi');
        $this->form_validation->set_message('valid_email', 'Alamat %s tidak valid');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

        if($this->form_validation->run() == TRUE)
        {
        	echo 'Selamat, Anda berhasil mendaftar. <a href="'.site_url('demo_captcha/index').'">kembali ke form</a>';
        }
        else 
        {
        	$data['recaptcha_html'] = $this->recaptcha->render();
        	$this->load->view('pages/demo-captcha', $data);
        }     
    }

    public function get_response_captcha($string)
    {
        $this->load->library('recaptcha');
        $response = $this->recaptcha->verifyResponse($string);
        if ($response['success']) {
            return true;
        } else {
            $this->form_validation->set_message('get_response_captcha', '%s harus diisi');
            return false;
        }
    }

}

/* application/controllers/Demo_captcha.php */
