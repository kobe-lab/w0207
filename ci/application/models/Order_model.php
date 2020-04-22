<?php

class Order_model extends MY_Model{
    protected $tablename = "sales_order";
    


    public function getid(){

        $this->db->select("id");
        $query = $this->db->get("sales_order");
        $row = $query->row_array();
        return $row['id'];
    }
}



?>