<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("model_pesan");
	}

	public function index()
	{
        if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $data['data'] = $this->model_pesan->getTable_sort("pesan", "id_pesan");
            $this->load->view('admin/content/pesan', $data);
            $this->load->view('admin/footer/footer');
        }else
        {
            $this->load->view('admin/login');
        }
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required|Valid_email');
		$this->form_validation->set_rules('pesan', 'ISI', 'required');

		if($this->form_validation->run() === FALSE)
		{
			echo '<script language="javascript">';
			echo 'alert("Gagal mengirim pesan. Ada field yang kosong / Isi email dengan benar");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}else{
			$nama		= $this->input->post('nama');
			$email		= $this->input->post('email');
			$pesan		= $this->input->post('pesan');

			$data=array(
				'TGL' => date('Y-m-d',now()),
				'NAMA' => $nama,
				'EMAIL' => $email,
				'ISI' => $pesan
				);
				
			$res=$this->model_pesan->insert('pesan', $data);
			echo '<script language="javascript">';
			echo 'alert("Pesan berhasil dikirim");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	}

	public function delete($id)
	{
		if($this->session->userdata('akses'))
		{
		$this->model_pesan->delete_data($id);
		redirect('index.php/admin/pesan');
		}
	}
}