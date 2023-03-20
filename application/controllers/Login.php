<?php 
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');

        if(!empty($this->session->userdata('login'))){
            redirect(base_url('v_login'));
        }
    }
    public function index()
    {
        $this->load->view('v_login');
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password =$this->input->post('password');

        $where = [
            'username' => $username,
            'password' => sha1(sha1($password))
        ];

        $data = $this->Login_model->cekUser($where);
        
        $jumlah = $data->num_rows();
        if($jumlah > 0){
            $this->session->set_userdata('login', 'isi session');
			redirect(base_url('main'));
        }
        else{
            echo 'Data tidak ada';
        }
    }
}

?>