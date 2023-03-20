<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    function select_data($tabel="", $field="", $where="", $orderby="", $ascdesc="", $limit="")
	{
        if (empty($field)) {
            $this->db->select("*");
        } 
        else {
            $this->db->select($field);
        }

        $this->db->from($tabel);

        if (!empty($where)) {
            $this->db->where($where);
        }

        if (!empty($orderby)) {
            $this->db->order_by($orderby,$ascdesc);
        }

        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        return $hasil = $this->db->get();
    }

    function tambah_data($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }

    function tambah_data_id($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }

    function edit_data($tabel, $data, $where="")
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        return $this->db->update($tabel, $data);
    }

    function delete_data($tabel, $where="")
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        return $this->db->delete($tabel);
    }
}
