<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("display_model"); // model database diss
        $this->load->model("diss_model"); // model database diss1
        $this->load->model("nav_model"); // model databse nav
        $this->load->model("catagory_model"); // load model catagory unmtuk user
        $this->load->model("disty_model"); // load model table diss2
        $this->load->model("dist_model"); //load model dist dari tabel diss3
        $this->load->model("distq_model"); // load model dissq tabel diss4
        $this->load->model("distw_model"); // load model distw tabel diss5
        $this->load->model("diste_model"); // load model distw tabel diss6
        $this->load->model("distr_model"); // load model distr diss7
        $this->load->model("distt_model"); // load model distr diss8
        $this->load->model("distu_model"); // load model distr diss9
        $this->load->model("disti_model"); // load model distr diss10
        $this->load->model("distd_model"); // load model distr diss11
        $this->load->model("diss12_model"); // load model distr diss12
        $this->load->model("disss14_model"); // load model diss 13
        $this->load->model("diss14_model");  // load model dari table diss 14
        $this->load->model("diss15_model");  // load model dari table diss 15
        $this->load->model("diss16_model"); // load model dari tabel diss 16
        $this->load->model("artikel_model"); // load model dari table artikel
        $this->load->model("diss18_model"); // load model dari tabel diss 18
        $this->load->model("diss19_model"); // load model dari tabel diss 19
        $this->load->model("diss20_model"); // load model dari tabel diss 20
        $this->load->model("diss21_model"); // load model dari tabel diss 21
        $this->load->model("diss22_model"); // load model dari tabel diss 22
        $this->load->model("diss23_model"); // load model dari tabel diss 22
        erlanggahelper();
        
        
    }

    public function index()
    {
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
           
            $this->load->view('user/index', $data);
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
            redirect('user/index', $data);
        }
    }


    public function profile(){
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

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

                 $this->form_validation->set_rules('name', 'Name', 'required|trim', [
                    'required' => 'Name kosong!'
                ]);
        

                if ($this->form_validation->run() == false) {
                            $this->load->view('user/profile', $data);
                } else {
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                   
                    $addres = $this->input->post('addres');
                    $country = $this->input->post('country');
                    $no_hp = $this->input->post('no_hp');
                    $roleacc = $this->input->post('roleacc');
                   
                 
                    
                    $this->db->set('name', $name);
                    $this->db->set('addres', $addres);
                    $this->db->set('country', $country);
                    $this->db->set('no_hp', $no_hp);
                   
                    
                    $this->db->where('email', $email);
                    $this->db->where('roleacc', $roleacc);
                    $this->db->update('user');
                    
                    // $this->session->set_flashdata('edit', 'Succes! anda berhasil memperbarui profile anda.');
                    redirect('user/profile', $data);
                }
    }


    public function opss(){

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

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // halaman untuk user
        $this->load->view('user/notfound', $data);
    }

    public function homee(){
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

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data["data_display"] = $this->display_model->getnews();
        $data["data_diss"] = $this->diss_model->getnewss();
        $data["data_nav"] = $this->nav_model->getviw();
        $data["data_cat"] = $this->catagory_model->getviw();
        $data["data_las"] = $this->disty_model->getnews();
        $data["data_dist"] = $this->dist_model->getnews();
        $data["data_distq"] = $this->distq_model->getnews();
        $data["data_fas"] = $this->distw_model->getnews();
        $data["data_fasq"] = $this->diste_model->getnews();
        $data["data_fasw"] = $this->distr_model->getnews();
        $data["data_fase"] = $this->distt_model->getnews();
        $data["data_fasr"] = $this->distu_model->getnews();
        $data["data_disti"] = $this->disti_model->getnews();
        $data["data_erlngga"] = $this->distd_model->getnews();
        $data["data_diss12"] = $this->diss12_model->getnews();
        $data["data_disss13"] = $this->disss14_model->getnews();
        $data["data_diss14"] = $this->diss14_model->getnews();
        $data["data_diss15"] = $this->diss15_model->getnews();
        $data["data_diss16"] = $this->diss16_model->getnews();
        $data["data_artikel"] = $this->artikel_model->getnews();
        $data["data_diss18"] = $this->diss18_model->getnews();
        $data["data_diss19"] = $this->diss19_model->getnews();
        $data["data_diss20"] = $this->diss20_model->getnews();
        $data["data_diss21"] = $this->diss21_model->getnews();
        $data["data_diss22"] = $this->diss22_model->getnews();
        $data["data_diss23"] = $this->diss23_model->getnews();

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
           
            $this->load->view('user/homee', $data);
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
            redirect('user/homee', $data);
        }
       
    }

    public function account(){

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

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/account');
    }

    public function ubahpass(){
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

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current_password', 'required|trim', [
            'required' => 'Password Kosong'
         ]);
         $this->form_validation->set_rules('new_password1', 'New_password1', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => 'New Password Kosong',
            'min_length' => 'Password Sangat Pendek',
            'matches' => 'Password Tidak sama'
         ]);
         $this->form_validation->set_rules('new_password2', 'Confirm New_password', 'required|trim|min_length[6]|matches[new_password1]', [
            'required' => 'New Password Kosong',
            'min_length' => 'Password Sangat Pendek',
            'matches' => 'Password Tidak sama'
         ]);

         if($this->form_validation->run() == false) {
             // halaman untuk user
             $this->load->view('user/ubahpass', $data);
         } else{
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if(!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('angga1', '<div class="alert alert-danger" role="alert">
                Password Lama Salah!
              </div>');
              redirect('user/ubahpass');
            } else {
                if($current_password == $new_password ){
                    $this->session->set_flashdata('angga', '<div class="alert alert-danger" role="alert">
                    Password baru dan lama tidak boleh sama!
                  </div>');
                    redirect('user/ubahpass');
                } else {
                    //passwordnya bener
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('angga2', '<div class="alert alert-succes" role="alert">
                    Password change!
                  </div>');
                    redirect('user/ubahpass');
                }
            }
         }
    }

    public function logot(){
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

       $data['user'] = $this->db->get_where('user', ['email' =>
       $this->session->userdata('email')])->row_array();

                $this->form_validation->set_rules('name', 'Name', 'required|trim', [
                   'required' => 'Name kosong!'
               ]);
       

               if ($this->form_validation->run() == false) {
                           $this->load->view('user/keluar', $data);
               } else {
                   $name = $this->input->post('name');
                   $email = $this->input->post('email');
                  
                   $waktu = $this->input->post('waktu');
                  
                   $roleacc = $this->input->post('roleacc');
                  
                
                   
                   $this->db->set('name', $name);
                   $this->db->set('waktu', $waktu);
                
                  
                   
                   $this->db->where('email', $email);
                   $this->db->where('roleacc', $roleacc);
                   $this->db->update('user');
                   
                   // $this->session->set_flashdata('edit', 'Succes! anda berhasil memperbarui profile anda.');
                   redirect('auth/keluar', $data);
               }
   }

   public function keluar(){
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

   $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('waktu', 'waktu', 'required|trim', [
               'required' => 'waktu kosong!'
           ]);
   

           if ($this->form_validation->run() == false) {
                       $this->load->view('user/keluar', $data);
           } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
              
               $waktu = $this->input->post('waktu');
              
          
              
            
               
               $this->db->set('name', $name);
               $this->db->set('email', $email);
               $this->db->set('waktu', $waktu);
            
              
               
              
               $this->db->where('email', $email);
               $this->db->update('user');

               
               // $this->session->set_flashdata('edit', 'Succes! anda berhasil memperbarui profile anda.');
               redirect('auth/logout', $data);
           }
}


}
