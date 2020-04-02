<?php
class Backend extends CI_Controller {

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



		$this->load->view("header");
        $this->load->view("backend/dashboard", $this->data);
		$this->load->view("footer");

    }
}
?>