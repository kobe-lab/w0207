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
            $this->load->model("Cart_model");
            $sid            = session_id();
            $this->Cart_model->update(array(
                'sid' => $sid,
                'is_deleted'  => 0,
            ), array(
                'user_id'      => $user['id'],
                'modified_date' => date("Y-m-d H:i:s"),
            ));
            $this->load->model("Wishlist_model");
            $sid            = session_id();
            $this->Wishlist_model->update(array(
                'sid' => $sid,
                'is_deleted'  => 0,
            ), array(
                'user_id'      => $user['id'],
                'modified_date' => date("Y-m-d H:i:s"),
            ));
            redirect(base_url(''));
        } else {
            redirect(base_url('userlogin?error=invalid'));
        }

    }

    
}
?>