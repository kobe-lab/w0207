<?php
class Admin_model extends MY_Model {
    protected $tablename = "admin";

    public function lowsy_auth($email, $password) {

        $this->db->where(array(
            'email' => $email,
            'pwd'   => $password,
        ));
        $query = $this->db->get($this->tablename);
        return $query->row_array();

    }

}
?>