<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {

		
	public function share()
	{
		//load share helper
		$this->load->helper('share');	
		
		$url = site_url('tutorial/share');
		$text = "Demo CI Share Social Media Helper";

		//generate share url for facebook
		$share_fb = share_url('facebook',  array('url'=> $url , 'text'=> $text));	
		$data['share_fb'] = "MyWindow=window.open('".$share_fb."',
            'MyWindow','width=600,height=300'); return false;"; 
        //generate share url for twitter
        $share_twitter = share_url('twitter',  array('url'=> $url, 'text'=> $text." ".$url, 'original_referer'=> $url));
        $data['share_twitter'] = "MyWindow=window.open('".$share_twitter."',
            'MyWindow','width=600,height=300'); return false;";
        //generate share url for google+
        $share_gplus = share_url('google-plus',  array('url'=> $url));
        $data['share_gplus'] = "MyWindow=window.open('".$share_gplus."',
            'MyWindow','width=600,height=300'); return false;"; 

		$this->load->view('pages/share', $data);
	}
}
