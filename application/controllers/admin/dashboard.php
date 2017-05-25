<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct() {
		parent::__construct();
        $this->load->model('model_admin');
	}

	public function index()
	{   
		if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $this->load->view('admin/content/dashboard');
            $this->load->view('admin/footer/footer');
        }else
        {       
            $this->load->view('admin/login');
         }
	}
    
    public function login(){
        if(isset($_POST['submit']))
        {
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->model_admin->login($username,$password);
            if($hasil==TRUE)
            {
                $this->session->set_userdata('akses',TRUE);
                //bawah ini yg ak tambahin index.php
                redirect ('index.php/admin/dashboard');
            } else{
                echo '<script language="javascript">';
                echo 'alert("Login Gagal. Perhatikan username password");';
                echo '</script>';
                $this->load->view('admin/login');
            }
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('index.php/welcome');
    }
}