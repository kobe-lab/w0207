<?php

class Product_model extends MY_Model{
    protected $tablename = "product";

    public function search($key){
        $this->db->like('title', $key);
        $query = $this->db->get($this->tablename);
        return $query->result_array();
    }
}



?>