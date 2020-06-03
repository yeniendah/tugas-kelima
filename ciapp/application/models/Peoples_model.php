<?php

class Peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples1')->result_array();
    }

    public function getPeoples($limit, $start, $keyword = null)
    {
        if( $keyword ) {
            $this->db->like('nama', $keyword);
        }
        return $this->db->get('peoples1', $limit, $start)->result_array();
    }

    public function countAllPeoples()
    {
        return $this->db->get('peoples1')->num_rows();

    }
}