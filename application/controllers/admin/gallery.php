<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("model_gallery");
	}

	public function index()
	{
        if($this->session->userdata('akses'))
        {
            $this->load->view('admin/navbar/navbar');
            $this->load->view('admin/content/tambahgallery');
            $this->load->view('admin/footer/footer');
        }else
        { 
            $this->load->view('admin/login');
        }
	}

	public function insertGallery()
	{
		if($this->session->userdata('akses'))
        {
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL)
			{
				$target_Path = "assets/file/images/";
				$string = basename( $_FILES['path']['name'] );
//				$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}



			//echo $id_foto_slider.' '.$target_Path;
			//die();
			//update Foto Slider
			if($target_Path!=NULL){
				$data = array(
					'JUDUL_GALLERY'=> $this->input->post('judul_gallery'),
					'ISI_GALLERY'=> $this->input->post('isi_gallery'),
					'PATH' => $target_Path);
					
					$query = $this->model_gallery->insert('gallery', $data);
				}
			
			//print_r($path);die();
			////////////////////////////
			if($query)
			{
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
				}
				echo '<script language="javascript">';
				echo 'alert("File berhasil ditambahkan");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else
			{

				echo '<script language="javascript">';
				echo 'alert("Gagal menyimpan file");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}
			//redirect('index.php/admin/tambahartikel/listArtikel');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function editGallery($id)
	{
		$this->form_validation->set_rules('judul_gallery', 'judul_gallery', 'required');
		$this->form_validation->set_rules('isi_gallery', 'isi_gallery', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->model_gallery->get_data_id($id);
			$this->load->view('admin/navbar/navbar');
        	$this->load->view('admin/content/editgallery', $data);
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
			if($target_Path!=NULL)
			{
				$data = array(
					'JUDUL_GALLERY' => $this->input->post('judul_gallery'),
					'ISI_GALLERY' => $this->input->post('isi_gallery'),
					'PATH' => $target_Path
				);
				$query = $this->db->where('id_gallery', $id);
				$query = $this->db->update('gallery', $data);
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
				else
				{
					echo '<script language="javascript">';
					echo 'alert("Gagal menyimpan file");';
					echo 'window.history.go(-1);';
					echo '</script>';
				}
				redirect('index.php/admin/gallery/listGallery');
			}
		}
	}

	public function listGallery(){
		if($this->session->userdata('akses')){
			$table = "gallery";
			$data['data'] = $this->model_gallery->gettable($table);
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/listgallery', $data);
	        $this->load->view('admin/footer/footer');
    	}else{
    		$this->load->view('admin/login');
    	}
	}

	public function hapusGallery($id){
		if($this->session->userdata('akses')){
			$this->model_gallery->delete_data($id);
			redirect('index.php/admin/gallery/listGallery');
		}else{
			$this->load->view('admin/login');
		}
	}
}