<?php

require "./vendor/autoload.php";


class Googleclient {

	public $client_id = "693437561551-cflb2un717og7ss4vl5d9n8k66kooj1c.apps.googleusercontent.com";	

	public function connect($token){

		$client = new Google_Client(['client_id' => $this->client_id]);  // Specify the CLIENT_ID of the app that accesses the backend
		$payload = $client->verifyIdToken($token);
		if ($payload) {

			return $payload;
		} else {
		  return array();
		}

	}

}
?>