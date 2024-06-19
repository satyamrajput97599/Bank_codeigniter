<?php

class DbModel extends CI_Model
{
    public function getData()
    {
        $data = $this->db->get('bank');
        return $data->result_array();
    }

    public function insertData($data)
    {
        $this->db->insert('bank', $data);
    }
    
    public function deposit($dt,$cn,$cm)
    {
        $this->db->update('bank', $dt,$cn,$cm);
    }

    public function getExist($data)
    {
        $rs = $this->db->get_where('bank', $data);
        return $rs->result_array();
    }

    public function updateData($data,$con,$rs)
    {
        $this->db->update('bank', $data,$con);
        return $rs->result_array();
    }

    public function getsum($data)
    {
        $rs = $this->db->get_where('mytrans',$data);
        return $rs->result_array();
    }


}
