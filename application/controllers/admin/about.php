<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("model_about");
	}

	public function index()
	{
        if($this->session->userdata('akses'))
        {
			$table = "about";
			$data['data'] = $this->model_about->gettable($table);
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/listabout', $data);
	        $this->load->view('admin/footer/footer');
  /*          $this->load->view('admin/navbar/navbar');
            $data['data'] = $this->model_about->getTable_sort("about", "id_about");
            $this->load->view('admin/content/listabout');
            $this->load->view('admin/footer/footer');
     */
        }else
        {
            $this->load->view('admin/login');
        }
	}

	public function editAbout($id)
	{
		$this->form_validation->set_rules('isi_about','isi_about', 'required');
		if($this->form_validation->run() === FALSE)
		{
			$data['data'] = $this->model_about->get_data_id($id);
			$this->load->view('admin/navbar/navbar');
        	$this->load->view('admin/content/editabout', $data);
        	$this->load->view('admin/footer/footer');
		} else {
		// mendapatkan semua data dari view
			//$this->model_artikel->edit_data($id);
				$data = array(
						'ISI_ABOUT' => $this->input->post('isi_about'));
				$query = $this->db->where('id_about', $id);
				$query = $this->db->update('about', $data);
		/*		if($query)
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

	*/
				redirect('index.php/admin/about/listAbout');
		}
	}

	public function listAbout()
	{
		if($this->session->userdata('akses'))
		{
			$table = "about";
			$data['data'] = $this->model_about->gettable($table);
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/listabout', $data);
	        $this->load->view('admin/footer/footer');
    	}else{
    		$this->load->view('admin/login');
    	}
	}

}