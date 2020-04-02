<?php
class Api_login_manage extends CI_Controller {

	public function flogin(){

		$this->load->library("fbclient");

		$token = $this->input->post("token", true);

		$fbData = $this->fbclient->connect($token);
	
		$this->load->model("User_model");

		$userData = $this->User_model->getOne(array(
			'type' => "fb",
			'social_id' => $fbData['id'],
		));

		$email = $fbData['email'];
		$fullname = $fbData['name'];
		$image    = "http://graph.facebook.com/".$fbData['id']."/picture?type=square";

		if(!empty($userData)) {

			$this->User_model->update(array(
				'id' => $userData['id']
			), array(
				'fullname' => $fullname,				
				'image' => $image,
				'token' => $token,
			));
			$id = $userData['id'];

		} else {

			$id = $this->User_model->insert(array(
				'type' => "fb",
				'social_id' => $fbData['id'],
				'fullname' => $fullname,
				'email' => $email,
				'image' => $image,
				'token' => $token,
				'created_date' => date("Y-m-d H:i:s"),
			));

		}		


		echo json_encode(array(
			'status' => "OK",
			'result' => $id,
		));

	}


	public function glogin(){

		$this->load->library("googleclient");

		$token = $this->input->post("token", true);

		$userData = $this->googleclient->connect($token);

		if(!empty($userData)) {

			$id = $userData['sub'];
			$fullname = $userData['name'];
			$given_name = $userData['given_name'];
			$family_name = $userData['family_name'];
			$email = $userData['email'];
			$image = $userData['picture'];

		}

		$this->load->model("User_model");

		$userData = $this->User_model->getOne(array(
			'type' => "google",
			'social_id' => $id,
		));
		if(!empty($userData)) {

			$this->User_model->update(array(
				'id' => $userData['id']
			), array(
				'fullname' => $fullname,
				'givenname' => $given_name,
				'familyname' => $family_name,
				'image' => $image,
				'token' => $token,
			));
			$id = $userData['id'];

		} else {

			$id = $this->User_model->insert(array(
				'type' => "google",
				'social_id' => $id,
				'fullname' => $fullname,
				'givenname' => $given_name,
				'familyname' => $family_name,
				'email' => $email,
				'image' => $image,
				'token' => $token,
				'created_date' => date("Y-m-d H:i:s"),
			));

		}

		echo json_encode(array(
			'status' => "OK",
			'result' => $id,
		));




	}




}
?>