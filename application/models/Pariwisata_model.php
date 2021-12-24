<?php

class Pariwisata_model extends CI_Model
{
    public function getsata()
    {
        return $this->db->get('pariwisata')->result_array();
    }

    public function inputWisata($data = null)
    {
        $this->db->insert('pariwisata', $data);
    }

    public function inputSaran($data = null)
    {
        $this->db->insert('saran', $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
}