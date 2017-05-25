<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalog extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("model_katalog");
	}

	public function index(){
        if($this->session->userdata('akses')){
            $this->load->view('admin/navbar/navbar');
            $this->load->view('admin/content/tambahkatalog');
            $this->load->view('admin/footer/footer');
        }else{ 
            $this->load->view('admin/login');
        }
	}

	public function insertKatalog(){
		if($this->session->userdata('akses')){
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/file/images/";
				$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}



			//echo $id_foto_slider.' '.$target_Path;
			//die();
			//update Foto Slider
			if($target_Path!=NULL){
				$data = array(
					'NAMA_KATALOG'=> $this->input->post('nama_katalog'),
					'HARGA_KATALOG'=> $this->input->post('harga_katalog'),
					'DESKRIPSI_KATALOG'=> $this->input->post('deskripsi_katalog'),
					'PATH'=> $target_Path);
					
					$query = $this->model_katalog->insert('katalog', $data);
				}
			
			//print_r($path);die();
			////////////////////////////
			if($query){
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
				}
				echo '<script language="javascript">';
				echo 'alert("File berhasil ditambahkan");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("Gagal menyimpan file");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}
			//redirect('admin/tambahartikel/listArtikel');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function editKatalog($id){
		$this->form_validation->set_rules('nama_katalog', 'nama_katalog', 'required');
		$this->form_validation->set_rules('harga_katalog', 'harga_katalog', 'required');
		$this->form_validation->set_rules('deskripsi_katalog', 'deskripsi_katalog', 'required');

		if($this->form_validation->run() === FALSE){
			$data['data'] = $this->model_katalog->get_data_id($id);
			$this->load->view('admin/navbar/navbar');
        	$this->load->view('admin/content/editkatalog', $data);
        	$this->load->view('admin/footer/footer');
		} else {
		// mendapatkan semua data dari view
			//$this->model_artikel->edit_data($id);
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/file/images/";
				$string = basename( $_FILES['path']['name'] );
		//		$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}
			if($target_Path!=NULL){
				$data = array(
					'NAMA_KATALOG' => $this->input->post('nama_katalog'),
					'HARGA_KATALOG' => $this->input->post('harga_katalog'),
					'DESKRIPSI_KATALOG' => $this->input->post('deskripsi_katalog'),
					'PATH' => $target_Path
				);
				$query = $this->db->where('id_katalog', $id);
				$query = $this->db->update('katalog', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
					}
					echo '<script language="javascript">';
					echo 'alert("File berhasil ditambahkan");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				else{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				redirect('index.php/admin/katalog/listKatalog');
			}
		}
	}

	public function listKatalog(){
		if($this->session->userdata('akses')){
			$table = "katalog";
			$data['data'] = $this->model_katalog->gettable($table);
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/listkatalog', $data);
	        $this->load->view('admin/footer/footer');
    	}else{
    		$this->load->view('admin/login');
    	}
	}

	public function hapusKatalog($id){
		if($this->session->userdata('akses'))
		{
			$this->model_katalog->delete_data($id);
			redirect('index.php/admin/katalog/listKatalog');
		}
	}
}