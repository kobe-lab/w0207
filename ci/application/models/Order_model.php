<?php

class Order_model extends MY_Model{
    protected $tablename = "sales_order";
    


    // public function getid(){

    //     $this->db->select("id");
    //     $query = $this->db->get("sales_order");
    //     $row = $query->row_array();
    //     return $row['id'];
    // }





    public function paymentphoto1($oid){
        
       

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('m_img'))
        {
            echo $this->upload->display_errors();
        }else
        {
            $data = $this->upload->data();

            $filename = $data['file_name'];

            $data = array(
                'payment_photo' => $filename
            );

            $this->db->where('id', $oid);
            $this->db->update('sales_order', $data);
       

        }
    }

    

    function getRecords(){

        // Select user records
        $this->db->select('*');
        $q = $this->db->get('sales_order');
        $results = $q->result_array();
    
        return $results;
      }


      function getRecord(){

        $this->db->select("id,user_id,sid,bill_firstname,bill_lastname,bill_tel, bill_email, bill_address1, bill_address2, bill_country,bill_city, bill_zipcode, bill_addinfo, ship_firstname, ship_lastname, ship_tel, ship_email, ship_address1, ship_address2, ship_country, ship_city, ship_zipcode, payment_totalamount, payment_status, created_date");
        $q = $this->db->get('sales_order');
        $results = $q->result_array();
    
        return $results;
      }
}



?>