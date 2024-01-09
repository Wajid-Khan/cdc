<?php

class LoginModel extends CI_Model 
{
    public function authenticate($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        $data = $query->result();
        if(!empty($data))
        {
            foreach($data as $row)
            {
                $raw = $row;
            }
            return $raw;
        }
    }
}
