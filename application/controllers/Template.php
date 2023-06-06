<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        erlanggahelper();
        $this->load->model("display_model"); // load dari model diss
        $this->load->model("diss_model"); //load dari model diss1
        $this->load->model("disty_model"); // load model diss2
        $this->load->model("dist_model"); // load model diss3
        $this->load->model("distq_model"); // load model diss4
        $this->load->model("distw_model"); //load model diss5
        $this->load->model("diste_model"); // load model diste tabel diss6
        $this->load->model("distr_model"); // load model distr tabel diss7
        $this->load->model("distt_model"); // load model distr tabel diss8
        $this->load->model("distu_model"); // load model distr tabel diss9
        $this->load->model("disti_model"); // load model disti tabel diss10
        $this->load->model("distd_model"); // load model disti tabel diss11
        $this->load->model("diss12_model"); // load model disti tabel diss12
        $this->load->model("disss14_model"); // load model diss13 
        $this->load->model("diss14_model"); // loaad model dari table diss14
        $this->load->model("diss15_model"); // load model dari tabel diss15
        $this->load->model("diss16_model"); // load model dari tabel diss16
        $this->load->model("artikel_model"); // load dari  table artikel 
        $this->load->model("diss18_model"); // load model diss 18 
        $this->load->model("diss19_model"); // load model diss 19
        $this->load->model("diss20_model"); // load model dari table diss 20 
        $this->load->model("diss21_model"); // load model dari table diss 21
        $this->load->model("diss22_model"); // load model dari table diss 22
        $this->load->model("diss23_model"); // load model dari table diss 23
        
        
    }
   
    public function index(){
      //sebuah logic jika controller ini diakses tanpa login
      if($this->session->userdata['role_id'] == false){
        // lempar ke halaman login untuk penyusup
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        // lempar ke sini
        redirect('auth/blocked');
     } else {
     }
     // ~end~

    $data["data_display"] = $this->display_model->getnews();

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    
    // halaman untuk user

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
       
        $this->load->view('template/index', $data);
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
        redirect('template/index', $data);
    }
    
   
    }
    

    public function t1(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss"] = $this->diss_model->getnewss(); // data_diss untuk kita looping di template t1
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t1', $data); // ganti ini
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
          redirect('template/t1', $data); // ganti ini
      }
      
     
      }

    public function t2(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_las"] = $this->disty_model->getnews();
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t2', $data);
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
          redirect('template/t2', $data);
      }
    }

    public function t3(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_dist"] = $this->dist_model->getnews();
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t3', $data); // ganti ini
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
          redirect('template/t3', $data); // sama ini
      }
    }

    public function t4(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_distq"] = $this->distq_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t4', $data); // ganti ini
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
          redirect('template/t4', $data); // sama ini
      }
    }

    public function t5(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_fas"] = $this->distw_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t5', $data); // ganti ini
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
          redirect('template/t5', $data); // sama ini
      }
    }

    public function t6(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_fasq"] = $this->diste_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t6', $data); // ganti ini
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
          redirect('template/t6', $data); // sama ini
      }
    }

    public function t8(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_fase"] = $this->distt_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t8', $data); // ganti ini
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
          redirect('template/t8', $data); // sama ini
      }
    }

    public function t7(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_fasw"] = $this->distr_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t8', $data); // ganti ini
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
          redirect('template/t8', $data); // sama ini
      }
    }

    public function t9(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_fasr"] = $this->distu_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t9', $data); // ganti ini
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
          redirect('template/t9', $data); // sama ini
      }
    }

    public function t10(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_disti"] = $this->disti_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t10', $data); // ganti ini
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
          redirect('template/t10', $data); // sama ini
      }
    }


    public function t11(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_erlngga"] = $this->distd_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t11', $data); // ganti ini
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
          redirect('template/t11', $data); // sama ini
      }
    }

    public function t12(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss12"] = $this->diss12_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t12', $data); // ganti ini
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
          redirect('template/t12', $data); // sama ini
      }
    }

    public function t13(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_disss13"] = $this->disss14_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t13', $data); // ganti ini
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
          redirect('template/t13', $data); // sama ini
      }
    }

    public function t14(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss14"] = $this->diss14_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t14', $data); // ganti ini
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
          redirect('template/t14', $data); // sama ini
      }
    }

    public function t15(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss15"] = $this->diss15_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t15', $data); // ganti ini
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
          redirect('template/t15', $data); // sama ini
      }
    }

    public function t16(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss16"] = $this->diss16_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t16', $data); // ganti ini
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
          redirect('template/t16', $data); // sama ini
      }
    }

    public function t17(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_artikel"] = $this->artikel_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t17', $data); // ganti ini
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
          redirect('template/t17', $data); // sama ini
      }
    }


    public function t18(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss18"] = $this->diss18_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t18', $data); // ganti ini
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
          redirect('template/t18', $data); // sama ini
      }
    }

    public function t19(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss19"] = $this->diss19_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t19', $data); // ganti ini
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
          redirect('template/t19', $data); // sama ini
      }
    }

    public function t20(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss20"] = $this->diss20_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t20', $data); // ganti ini
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
          redirect('template/t20', $data); // sama ini
      }
    }

    public function t21(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss21"] = $this->diss21_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t21', $data); // ganti ini
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
          redirect('template/t21', $data); // sama ini
      }
    }

    public function t22(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss22"] = $this->diss22_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t22', $data); // ganti ini
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
          redirect('template/t22', $data); // sama ini
      }
    }

    public function t23(){
        //sebuah logic jika controller ini diakses tanpa login
        if($this->session->userdata['role_id'] == false){
          // lempar ke halaman login untuk penyusup
          $this->session->unset_userdata('email');
          $this->session->unset_userdata('role_id');
          // lempar ke sini
          redirect('auth/blocked');
       } else {
       }
       // ~end~
  
      
      $data["data_diss23"] = $this->diss23_model->getnews(); // ini
  
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      
      // halaman untuk user
  
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
         
          $this->load->view('template/t23', $data); // ganti ini
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
          redirect('template/t23', $data); // sama ini
      }
    }





}