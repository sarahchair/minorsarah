<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->model('model_about');
		$this->load->model('model_gallery');
		$this->load->model('model_katalog');
//		$this->load->model('model_gallery');
	}

	public function index()
	{
		$this->session->sess_destroy();

		$table = "about";
		$tablegallery = "gallery";
		$tablekatalog = "katalog";

		$data['data'] = $this->model_about->gettable($table);
		$datagallery['datagallery'] = $this->model_gallery->gettable($tablegallery);
		$datakatalog['datakatalog'] = $this->model_katalog->gettable($tablekatalog);

        $this->load->view('frontend/header/banner');

		$this->load->view('frontend/content/welcome', $data);

        $this->load->view('frontend/content/slid');

        $this->load->view('frontend/content/menu', $datakatalog);

        $this->load->view('frontend/content/team');

        $this->load->view('frontend/content/gallery', $datagallery); // nah disinii nih dia nampilin $datanya yg di view gallery.php
 //       $dataartikel['dataartikel'] = $this->model_artikel->gettable("artikel");
// 	$this->load->view('frontend/content/artikel', $dataartikel);
		
		$this->load->view('frontend/footer/address');
		$this->load->view('frontend/footer/contact');
		$this->load->view('frontend/footer/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */