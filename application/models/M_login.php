<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek($data)
    {
        $cek = $this->db->get_where('t_siswa', $data)->num_rows();
        if ($cek > 0) {
            return true;
        } else {
            return false;
        }
    }

    function getData()
    {
        return $this->db->query($this->db->last_query())->row();
    }

    function cekPerubahan()
    {
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function update($data, $where)
    {
        $this->db->where('id', $where);
        $this->db->update('t_siswa', $data);
        return $this->cekPerubahan();
    }
}
