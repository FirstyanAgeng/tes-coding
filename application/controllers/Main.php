<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class main extends CI_Controller 
{
	public function __Construct()
	{
	   	parent ::__construct();
	    $this->load->model('M_crud');
	}

	public function index()
	{
		$view = array('konten' => 'v_dashboard');

		$this->load->view('v_main', $view);
	}
}
