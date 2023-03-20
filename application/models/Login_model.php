<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	// load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    
    public function cekUser($where)
    {
        $this->db->where($where);
        return $this->db->get('tb_user');
    }

}