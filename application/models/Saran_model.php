<?php

class Saran_model extends CI_Model
{
    public function getsata()
    {
        return $this->db->get('saran')->result_array();
    }
    public function hapus_data($data,$table)
    {
		$this->db->where($data);
		$this->db->delete($table);
	}
}