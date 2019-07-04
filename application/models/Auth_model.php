<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function check_login($username, $password)       
    {
        $get_userdata = $this->db->get_where('admin', ['username' => $username] )->row();
        if (! $get_userdata) return false;
        if (! password_verify($password, $get_userdata->password)) return false;
        return $get_userdata;
    }
    
}
