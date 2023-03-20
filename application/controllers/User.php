<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{
	// -----
	public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
	    $this->load->model('M_crud');
    }

    // -----
	public function index()
	{
		$data = $this->M_crud->select_data('tb_user', '*');

		$view = array(
			'konten' 	=> 'v_user',
			'data' 		=> $data
		);
		$this->load->view('v_main', $view, FALSE);
	}

	// -----
	public function form_tambah()
	{
		$view = array(
			'konten' 	=> 'v_user_form_tambah'
		);
		$this->load->view('v_main', $view, FALSE);
	}

	// -----
	public function tambah_proses()
	{
		$in = @$this->input;
		$id = date('ymdHis').time();
		$username = $in->post('username');
		$password = $in->post('password');

		$data = array(
			'id' 				=> $id,
			'nama'				=> $in->post('nama'),
			'nohp'				=> $in->post('nohp'),
			'alamat'			=> $in->post('alamat'),
			'username'			=> $username,
			'password'			=> sha1(sha1($password)),
			'status'			=> 'Aktif'
		);
		$insert = $this->M_crud->tambah_data('tb_user', $data);

		if($insert>0)
		{
			$this->session->set_userdata('alert_sukses', 'Tambah data user sukses');
			redirect(base_url('user'));
		}
		else{
			$this->session->set_userdata('alert_gagal', 'Tambah data user gagal');
			redirect(base_url('user'));
		}
	}

	// -----
	public function form_edit($id="")
	{
		$where 	= array('id' => $id);
		$data 	= $this->M_crud->select_data('tb_user', '*', $where, '', '');

		$view = array(
			'konten' 	=> 'v_user_form_edit',
			'id'		=> $id,
			'data' 		=> $data
		);
		$this->load->view('v_main', $view, FALSE);
	}

	// -----
	public function edit_proses()
	{
		$in = $this->input;
		$id	= $in->post('id');

		$data = array(
			'nama'				=> $in->post('nama'),
			'alamat'			=> $in->post('alamat'),
			'nohp'				=> $in->post('nohp'),
			'username'			=> $in->post('username'),
			'status'			=> $in->post('status'),
		);
		$where 	= array('id' => $id);
		$update = $this->M_crud->edit_data('tb_user', $data, $where);

		if($update>0)
		{
			$this->session->set_userdata('alert_sukses', 'Edit data user sukses');
			redirect(base_url('user'));
		}
		else{
			$this->session->set_userdata('alert_gagal', 'Edit data user gagal');
			redirect(base_url('user'));
		}
	}

	// -----
	public function hapus_proses($id="")
	{
		$where 	= array('id' => $id);
		$delete = $this->M_crud->delete_data('tb_user', $where);

		if($delete>0)
		{
			$this->session->set_userdata('alert_sukses', 'Hapus data user sukses');
			redirect(base_url('user'));
		}
		else{
			$this->session->set_userdata('alert_gagal', 'Hapus data user gagal');
			redirect(base_url('user'));
		}
	}
}