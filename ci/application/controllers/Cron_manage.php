<?php 


    class Cron_manage extends CI_Controller{

        public function index(){

            $this->load->model("Visitor_model");

            $this->Visitor_model->insert(array(
                'qty' => 1,
                'created_date' => date("Y-m-d H:i:s"),
            ));

        }



    }

?>