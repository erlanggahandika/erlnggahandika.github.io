<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        erlanggahelper();
        $this->load->model("display_model"); // load dari model display
        
        
    }

    public function index(){
       //admin dilarang masuk controller user
       if($this->session->userdata['role_id'] == 1){
        // lempar ke halaman login untuk penyusup
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        // lempar ke sini
        redirect('auth/blocked');
     } else {
     }
     //admin dilarang masuk controler user

     $display["data_display"] = $this->display_model->getnews();

     
     $data['user'] = $this->db->get_where('user', ['email' =>
     $this->session->userdata('email')])->row_array();

     $this->form_validation->set_rules('name', 'Name', 'required|trim',[
        'required' => 'nama masih kosong'
    ]);
    $this->form_validation->set_rules('email', 'email', 'required|trim',[
        'required' => 'email masih kosong'
    ]);
    $this->form_validation->set_rules('subject', 'subject', 'required|trim', [
        'required' => 'subject masih kosong'
    ] );
    $this->form_validation->set_rules('message', 'message', 'required|trim', [
        'required' => 'message masih kosong'
    ] );

    if($this->form_validation->run() == false) {
       
        $this->load->view('news/index', $data);
    } else {
        $contact = [
            'name' =>  htmlspecialchars($this->input->post('name')),
            'email' => htmlspecialchars($this->input->post('email')),
            'subject' => htmlspecialchars($this->input->post('subject')),
            'message' => htmlspecialchars($this->input->post('message')),
            'date' => time(),
        ];

        $this->db->insert('contact', $contact);
        $this->session->set_flashdata('gagal22', '<div class="alert alert-success" role="alert">
        Berhasil Mengirim Pesan!
        </div>');
        redirect('news/index', $data);
    }
     

    }
}