<?php

class Admin_model extends CI_Model
{
    public function getData()
    {
        return $this->db->get('admin')->result_array();
    }
}
