<?php

class Order_model extends MY_Model{
    protected $tablename = "sales_order";
    


    public function getid(){

        $this->db->select("id");
        $query = $this->db->get("sales_order");
        $row = $query->row_array();
        return $row['id'];
    }

    public function paymentphoto1($oid){
        $config['upload_path'] = './assets/';
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
}



?>