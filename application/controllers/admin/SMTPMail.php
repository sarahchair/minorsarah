<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SMTPMail extends CI_Controller {

		public function __construct() {
		parent::__construct();
		$this->load->model('model_email');
		$this->load->model('model_broadcast');
//		$this->load->model('model_email');
//		$this->load->model('model_menu');
//		$this->load->model('model_gallery');
	}

/*	public function insert()
	{
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required');

		if($this->form_validation->run() === FALSE)
		{
			echo '<script language="javascript">';
			echo 'alert("Gagal subscribe. Ada field yang kosong");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}else{
			$nama		= $this->input->post('nama');
			$email		= $this->input->post('email');

			$data=array(
				'TGL' => date('Y-m-d',now()),
				'NAMA' => $nama,
				'EMAIL' => $email,
				);
				
			$res=$this->model_email->insert('subscriber', $data);
			echo '<script language="javascript">';
			echo 'alert("You are now our subscriber, beauties!");';
			echo 'window.history.go(-1);';
			echo '</script>';
		}
	} */

	public function index(){

		$this->form_validation->set_rules('nama', 'NAMA', 'required');
		$this->form_validation->set_rules('email', 'EMAIL', 'required|Valid_email');

		$nama		= $this->input->post('nama');
		$email		= $this->input->post('email');

		$data=array(
			'NAMA_SUBSCRIBER' => $nama,
			'EMAIL_SUBSCRIBER' => $email,
			);
				
		$res=$this->model_email->insert('subscriber', $data);


		$sender_email = "minorprojectindonesia@gmail.com";
		$user_password = "minorproject";
		$username = "Reny from Minor Project";
		$receiver_email = $this->input->post('email');
		$subject = "Big Hugs from Minor Project<3";
		$message = "Hello Beauties, you're now our subscriber. Stay tuned!";
		$message .= '<img src="http://i.imgur.com/556Bdgr.jpg" alt="my picture">';
		$message .= '<a href="http://instagram.com/minor.project">See Our Instagram❤';

		$this->emailConfig();
		$this->email->from($sender_email, $username);
		$this->email->to($receiver_email);
		$this->email->subject($subject);
		$this->email->message($message);

		//$mail =
		if($this->email->send()){
			//? "Sent" : "Failed" ;
		
		echo '<script language="javascript">';
				echo 'alert("Thankyou for being our subscriber!");';
				echo 'window.history.go(-1);';
				echo '</script>'; 
		}else{

		echo '<script language="javascript">';
				echo 'alert("Failed to subscribe.");';
				echo 'window.history.go(-1);';
				echo '</script>';
		}
		//echo $this->email->print_debugger();

		//echo $mail;
	}
	
	private function emailConfig(){
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com';
		$config['smtp_port'] = 465;
		$config['smtp_user'] = 'minorprojectindonesia@gmail.com';
		$config['smtp_pass'] = 'minorproject';
		$config['mailtype']= 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
	
		$this->load->library('email', $config);
	}

	public function delete($id){
		if($this->session->userdata('akses')){
		$this->model_email->delete_data($id);
		redirect('index.php/admin/SMTPMail/view');
		}
	}

	public function view(){
		if($this->session->userdata('akses')){
            $this->load->view('admin/navbar/navbar');
            $data['data'] = $this->model_email->getTable_sort("subscriber", "id_subscriber");
            $this->load->view('admin/content/subscriber', $data);
            $this->load->view('admin/footer/footer');
        }else{
            $this->load->view('admin/login');
        }
	}

	public function insertBroadcast(){


		if($this->session->userdata('akses')) {
			$target_Path = NULL;
			if ($_FILES['path']['name'] != NULL){
				$target_Path = "assets/file/images/";
				$string = basename( $_FILES['path']['name'] );
//				$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}

			if($target_Path!=NULL){
				$data = array(
					'TGL_BROADCAST' => date('Y-m-d',now()),
					'SUBJECT_BROADCAST'=> $this->input->post('subject_broadcast'),
					'MESSAGE_BROADCAST'=> $this->input->post('message_broadcast'),
					'PATH' => $target_Path);
					
					$query = $this->model_broadcast->insert('broadcast', $data);
				}
			
			//print_r($path);die();
			////////////////////////////
			if($query){
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['path']['tmp_name'], $target_Path );
				}
			/*	echo '<script language="javascript">';
				echo 'alert("File berhasil diupload");';
				echo 'window.history.go(-1);';
				echo '</script>'; */
			}else
			{

			/*	echo '<script language="javascript">';
				echo 'alert("Gagal upload file");';
				echo 'window.history.go(-1);';
				echo '</script>'; */
			}
			//redirect('admin/tambahartikel/listArtikel');

	/*		$nama		= $this->input->post('nama');
			$email		= $this->input->post('email');

			$data=array(
				'NAMA_SUBSCRIBER' => $nama,
				'EMAIL_SUBSCRIBER' => $email,
				);
				
			$res=$this->model_email->insert('subscriber', $data); */


		//	$emailsubscriber = $this->model_broadcast->getemail("subscriber");
		//	$subs = array();
		//	$subs[] = $datasubscriber;
			//reach ($datasubscriber as $r) {
			
			
			//data = array($datasubscriber['email_subscriber']);
			//}

			$sender_email = "minorprojectindonesia@gmail.com";
			$user_password = "minorproject";
			$username = "Reny from Minor Project";
			$receiver_email = $this->input->post('receiver_broadcast');
					
					// array('siapaya@123.com', 'lalaala@123.com');
			//array(foreach ($datasubscriber as $row) {
								//	echo '$row['email_subscriber']';
								//});
			//$receiver_email = $this->input->post('email');
			$subject = $this->input->post('subject_broadcast');
			$message = $this->input->post('message_broadcast');
			
			$this->emailConfig();
			$this->email->from($sender_email, $username);
			$this->email->to($receiver_email);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->attach($target_Path);

			//$mail = ($this->email->send()) ? "Sent" : "Failed" ;
			if($this->email->send()){
			//? "Sent" : "Failed" ;
		
				echo '<script language="javascript">';
				echo 'alert("Broadcast Terkirim");';
				echo 'window.history.go(-1);';
				echo '</script>'; 
				redirect('index.php/admin/SMTPMail/listBroadcast');
			}else{

				echo '<script language="javascript">';
				echo 'alert("Gagal Mengirim");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}

			//echo $this->email->print_debugger();

			//echo $mail;

		}
	}
//terus mau ku bisa ngirim pesan waktu insert

	public function listBroadcast(){
		if($this->session->userdata('akses')){
			$table = "broadcast";
			$data['data'] = $this->model_broadcast->gettable($table);
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/listbroadcast', $data);
	        $this->load->view('admin/footer/footer');
    	}else{
    		$this->load->view('admin/login');
    	}
	}

	public function formBroadcast(){
		if($this->session->userdata('akses')){
			//$data['data'] = $this->model_broadcast->getemail();
			$this->load->view('admin/navbar/navbar');
	        $this->load->view('admin/content/broadcast');
	        $this->load->view('admin/footer/footer');
    	}else{
    		$this->load->view('admin/login');
    	}
	}

	public function hapusBroadcast($id){
		if($this->session->userdata('akses')){
			$this->model_broadcast->delete_data($id);
			redirect('index.php/admin/SMTPMail/listBroadcast');
		}else{
			$this->load->view('admin/login');
		}	
	}
}