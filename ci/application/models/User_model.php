<?php
class User_model extends MY_Model {
    protected $tablename = "user";

    public function lowsy_auth($email, $password) {

        $this->db->where(array(
            'email' => $email,
            'password'   => $password,
        ));
        $query = $this->db->get($this->tablename);
        return $query->row_array();

    }

}

?>