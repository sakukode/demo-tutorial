<?php

// include your composer dependencies
require_once 'vendor/autoload.php';

class Google {

   private $client;
   private $client_id = '810422654057-8k1gf4mhqv6nhqgm1cqgckkpqet7d8ha.apps.googleusercontent.com';
   private $client_secret = 'lr2Y1G5VWwS8mAtSgYXR0wQN';
   private $redirect_uri = 'http://demo.rizqimaulana.web.id/codeigniter/welcome/testgoogle';
   private $simple_api_key = 'AIzaSyBznHrepYv8Vp4SWS85A1c6tgArq8Zhwbc';
   
   public function __construct() {
       if(!$this->client) {
       	   $this->client = new Google_Client();
       	   $this->client->setApplicationName("CI Google OAuth Login Example");
	   $this->client->setClientId($this->client_id);
	   $this->client->setClientSecret($this->client_secret);
	   $this->client->setRedirectUri($this->redirect_uri);
	   $this->client->setDeveloperKey($this->simple_api_key);
	   $this->client->addScope("https://www.googleapis.com/auth/userinfo.email");
       }
   }
   
   public function getClient() {
      	return $this->client;
   }
}