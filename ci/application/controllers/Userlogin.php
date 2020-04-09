<?php
class Userlogin extends CI_Controller {

    private $data = [];

    public function __construct(){
        parent::__construct();
       
    }

    public function submit(){

        $email      = $this->input->post("email", true);
        $password   = $this->input->post("password", true);

        $this->load->model("User_model");
        $user = $this->User_model->lowsy_auth($email, $password);
        if(!empty($user)) {
            $this->session->set_userdata("is_user", $user['id']);
            redirect(base_url(''));
        } else {
            redirect(base_url('userlogin?error=invalid'));
        }

    }

    
}
?>