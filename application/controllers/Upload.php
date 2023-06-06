<?php 
 
class Upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
          erlanggahelper();
	}
 
	public function index(){
           // keamanan url admin stater pack
           if($this->session->userdata['role_id'] == 1){
           
           } else {
               // lempar ke halaman login untuk penyusup
               $this->session->unset_userdata('email');
               $this->session->unset_userdata('role_id');
               // lempar ke sini
               redirect('auth/blocked');
           }

		   
           // keamanan url admin end
		$this->load->view('upload/index', array('error' => ' ' ));
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './assets/erlanggaa/trial/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload/index', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload/vgambar', $data);
		}
	}
	
}