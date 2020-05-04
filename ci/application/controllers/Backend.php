<?php
class Backend extends CI_Controller {

    private $data = [];

    public function __construct(){
        parent::__construct();
        $is_admin = $this->session->userdata("is_admin");
        if(!isset($is_admin)) {
            redirect(base_url('adminlogin'));
        }

    }

    public function logout(){
        $this->session->unset_userdata('is_admin');
        redirect(base_url('adminlogin'));
    }

    public function header(){

        $this->load->view("backend/header", $this->data);
    }

    public function footer(){

        $this->load->view("backend/footer", $this->data);
    }

    public function dashboard(){

        $this->load->model("Visitor_model");

		$dataList = $this->Visitor_model->get_where(array());

        $dateGroup = array();

		if(!empty($dataList)) {
			foreach($dataList as $v) {

				if(isset($dateGroup[substr($v['created_date'],0,7)])) {
					$dateGroup[substr($v['created_date'],0,7)]++;
				} else {
					$dateGroup[substr($v['created_date'],0,7)] = 1;
				}

			}
		}

		ksort($dateGroup);

		$finalFormat = array(
			array("Month", "pageViews")
		);

		if(!empty($dateGroup)){
			foreach($dateGroup as $k=>$v) {
				$finalFormat[] = array(
					$k, $v
				);
			}
		}


		$this->data['finalFormat'] = $finalFormat;



        $this->header();
        $this->load->view("backend/dashboard", $this->data);
        $this->footer();
    }

    public function ordermanagement(){
        $this->load->model("Order_model");

        $this->header();
        $this->load->view("backend/ordermanagement", $this->data);
        $this->footer();
    }
    

}
?>