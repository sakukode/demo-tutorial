<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function testgoogle() {
	 $redirect_uri = "http://demo.rizqimaulana.web.id/codeigniter/welcome/testgoogle";
	 $client = $this->google->getClient();
	   // Send Client Request
		$objOAuthService = new Google_Service_Oauth2($client);
		
		// Add Access Token to Session
		if (isset($_GET['code'])) {
		$client->authenticate($_GET['code']);
		$_SESSION['access_token'] = $client->getAccessToken();
		header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
		
		// Set Access Token to make Request
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
		$client->setAccessToken($_SESSION['access_token']);
		}
		
		// Get User Data from Google and store them in $data
		if ($client->getAccessToken()) {
		$userData = $objOAuthService->userinfo->get();
		$data['userData'] = $userData;
		$_SESSION['access_token'] = $client->getAccessToken();
		} else {
		$authUrl = $client->createAuthUrl();
		$data['authUrl'] = $authUrl;
		}
		// Load view and send values stored in $data
		$this->load->view('google_authentication', $data);
	}
	
	public function test_sendgrid() {
		$this->load->library('email');

		$this->email->initialize(array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'smtp.sendgrid.net',
		  'smtp_user' => 'sakukode',
		  'smtp_pass' => 'hinata88',
		  'smtp_port' => 587,
		  'crlf' => "\r\n",
		  'newline' => "\r\n"
		));
		
		$this->email->from('noreply@rizqimaulana.web.id', 'Rizqi Maulana');
		$this->email->to('belancon.dev@gmail.com');
		$this->email->cc('togepi.catcher@gmail.com');
		$this->email->subject('Email Test Multi Send from Sendgrid');
		$this->email->message('Testing the email class using sendgrid.');
		$this->email->send();
		
		echo $this->email->print_debugger();
	}
}