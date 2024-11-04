<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login/login_page');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => $password,
			);
		$cek = $this->m_login->cek_login("admin",$where)->result();

        if($cek > 0){
           
            foreach($cek as $data){
                if($data->posisi == "meja 1"){
                    $data_session = array(
                        'nama' => $username,
                        'status' => "login"
                        );
        
                    $this->session->set_userdata($data_session);
        
                    redirect(base_url("meja1"));
                }elseif($data->posisi == "meja 2"){
                   
                    $data_session = array(
                        'nama' => $username,
                        'status' => "login"
                        );
        
                    $this->session->set_userdata($data_session);
        
                    redirect(base_url("meja2"));
                }elseif($data->posisi == "meja 4"){
                    $data_session = array(
                        'nama' => $username,
                        'status' => "login"
                        );
        
                    $this->session->set_userdata($data_session);
        
                    redirect(base_url("meja4"));
                }elseif($data->posisi == "meja 3"){
                    $data_session = array(
                        'nama' => $username,
                        'status' => "login"
                        );
        
                    $this->session->set_userdata($data_session);
        
                    redirect(base_url("meja3"));
                }
                   
               
            //var_dump($data->posisi);
            // die();
            
            }
			

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
        redirect(base_url("login"));
	}
}