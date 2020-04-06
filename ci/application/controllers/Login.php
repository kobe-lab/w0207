<?php
class Login extends CI_Controller {

    private $data = [];

    public function __construct(){
        parent::__construct();

    }

    public function submit(){

        $email      = $this->input->post("email", true);
        $password   = $this->input->post("password", true);

        $this->load->model("Admin_model");
        $admin = $this->Admin_model->lowsy_auth($email, $password);
        if(!empty($admin)) {
            $this->session->set_userdata("is_admin", true);
            redirect(base_url('backend/dashboard'));
        } else {
            redirect(base_url('adminlogin?error=invalid'));
        }

    }

    public function index(){

        $this->load->view("backend/login", $this->data);

    }

}
?>