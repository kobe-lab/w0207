<?php

class Productreview_model extends MY_Model{
    protected $tablename = "productreview";


    public function insert_form($request)
    {
        $insertStatus=$this->db->insert('productreview', array(
        'product_id'=>$request['product_id'],
        'name'=>$request['name'],
        'subject'=>$request['subject'],
        'rating'=>$request['rating'],
        'message'=>$request['message'],
        'is_deleted'=>$request['is_deleted'],
        'created_date'=>$request['created_date'],
        
    ));
        return $insertStatus;
    }



}



?>