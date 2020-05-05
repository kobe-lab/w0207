<?php
class Backend extends CI_Controller {

    private $data = [];

    public function __construct(){
        parent::__construct();

        
        $this->load->model("Order_model");
        $this->load->model("Orderitem_model");


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
       

        $this->header();
        $this->load->view("backend/ordermanagement", $this->data);
        $this->footer();
    }

    public function getOrder(){
        // get data
        
       
        $data = $this->Order_model->getRecords();
        echo json_encode($data);
      }
    

      function export()
      {
        
        $file_name = 'Order'.date('Ymd').'.csv'; 
          header("Content-Description: File Transfer"); 
          header("Content-Disposition: attachment; filename=$file_name"); 
          header("Content-Type: application/csv;");
        
          // get data 
          $order_data = $this->Order_model->getRecord();
     
          // file creation 
          $file = fopen('php://output', 'w');
      
          $header = array("id","user_id","sid","bill_firstname","bill_lastname","bill_tel", "bill_email", "bill_address1", "bill_address2", "bill_country","bill_city", "bill_zipcode", "bill_addinfo", "ship_firstname", "ship_lastname", "ship_tel", "ship_email", "ship_address1", "ship_address2", "ship_country", "ship_city", "ship_zipcode", "payment_totalamount", "payment_status", "created_date"); 
          fputcsv($file, $header);
          foreach ($order_data as $key => $value)
          {
            fputcsv($file, $value); 
          }
          fclose($file); 
          exit; 
      }

        public function editorder($oid){

        $this->data['editorder'] = $this->Order_model->getOne(array(
            'id' => $oid,
        ));

        $this->header();
        $this->load->view("backend/editorder", $this->data);
        $this->footer();
      }



      public function editorderdata()
      {
      $request= json_decode(file_get_contents('php://input'), TRUE);
      $this->Order_model->update(array(
          'id' => $request['id']
        ), array(
            'payment_status' => $request['payment_status'],
            'user_id' =>$request['user_id'],
            'bill_firstname' =>$request['bill_firstname'],
            'bill_lastname' =>$request['bill_lastname'],
            'sid' =>$request['sid'],
            'bill_tel' =>$request['bill_tel'],
            'bill_email' =>$request['bill_email'],
            'bill_address1' =>$request['bill_address1'],
            'bill_address2' =>$request['bill_address2'],
            'bill_country' =>$request['bill_country'],
            'bill_city' =>$request['bill_city'],
            'bill_zipcode' =>$request['bill_zipcode'],
            'bill_addinfo' =>$request['bill_addinfo'],
            'ship_firstname' =>$request['ship_firstname'],
            'ship_lastname' =>$request['ship_lastname'],
            'ship_tel' =>$request['ship_tel'],
            'ship_address1' =>$request['ship_address1'],
            'ship_address2' =>$request['ship_address2'],
            'ship_country' =>$request['ship_country'],
            'ship_zipcode' =>$request['ship_zipcode'],
            'payment_totalamount' =>$request['payment_totalamount'],
            'created_date' =>$request['created_date'],
            'modified_date' => date("Y-m-d H:i:s")
         
      ));
  
      }


      public function orderdetail($oid){


        $this->data['myOrderdetail'] = $this->Orderitem_model->get_where(array(
            'oid' =>$oid,
        ));

        $this->header();
        $this->load->view("backend/orderdetail", $this->data);
        $this->footer();
      }
}
?>