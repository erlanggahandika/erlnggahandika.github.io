<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('v_user');
        
        erlanggahelper();
        $this->load->model("user_model"); //load model user
        $this->load->model("contact_model"); //load model contact
        $this->load->model("display_model"); //load model database diss
        $this->load->model("diss_model"); //load model database diss1
        $this->load->model("admin_model"); //load model database admin
        $this->load->model("disty_model"); // load model database diss2
        $this->load->model("dist_model"); // load model database diss3
        $this->load->model("distq_model"); // load model database diss4
        $this->load->model("distw_model"); // load model database diss5
        $this->load->model("diste_model"); // load model database diss6
        $this->load->model("distr_model"); // load model distr table data diss7
        $this->load->model("distt_model"); // load model distt table dist 8
        $this->load->model("distu_model"); // load model distt table dist 9
        $this->load->model("disti_model"); // load model dari tabel diss10 
        $this->load->model('distd_model'); // load model dari tabel diss 11
        $this->load->model('diss12_model'); // load model dari tabel diss 12
        $this->load->model('disss14_model'); // load model dari tabel diss 13
        $this->load->model("diss14_model"); // load model diss14
        $this->load->model("diss15_model"); // load model diss 15 dari table diss15
        $this->load->model("diss16_model"); // load model diss 16
        $this->load->model("artikel_model"); /// load model artikel dari table artikel
        $this->load->model("diss18_model"); // load model diss18 
        $this->load->model("diss19_model"); // load model diss19 
        $this->load->model("diss20_model"); // load model diss20 dari table diss 20        
        $this->load->model("diss21_model"); // load model diss20 dari table diss 21       
        $this->load->model("diss22_model"); // load model diss20 dari table diss 22       
        $this->load->model("diss23_model"); // load model diss20 dari table diss 23  
     
    }

    public function index()
    {
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
        $data["data_display"] = $this->display_model->getnews();
        $data["data_diss"] = $this->diss_model->getnewss();
        $data["data_las"] = $this->disty_model->getnews();
        $data["data_dist"] = $this->dist_model->getnews();
        $data["data_distq"] = $this->distq_model->getnews();
        $data["data_admin"] = $this->admin_model->getviw();
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
      

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('admin/admin', $data);
    }

    public function leader()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            redirect('admin/eror');
        }
        // keamanan url admin end

        $data["data_display"] = $this->display_model->getnews();
        $data["data_diss"] = $this->diss_model->getnewss();
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
        
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('admin/owner', $data);
    }

    public function eror(){
        $this->load->view('admin/eror');
    }


    

    public function profile(){

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
        $data["data_admin"] = $this->admin_model->getviw();
       if($this->session->userdata['role_id'] == 1)
       

       $data['user'] = $this->db->get_where('user', ['email' =>
       $this->session->userdata('email')])->row_array();

       
                $this->form_validation->set_rules('name', 'Name', 'required|trim', [
                   'required' => 'Name kosong!'
               ]);
       

               if ($this->form_validation->run() == false) {
               //     $this->session->set_flashdata('eror', '<div class="alert alert-info" role="alert">
               //     Gagal Memperbarui Data!
               //   </div>');
                           $this->load->view('admin/profile', $data);
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
                   
                   $this->session->set_flashdata('berhasil', '<div class="alert alert-info" role="alert" ata-aos="fade-right" data-aos-delay="350">
                   Berhasil Memperbarui Profile!
                 </div>');
                   redirect('admin/profile', $data);
       }
   }

    public function account(){

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
        $data["data_admin"] = $this->admin_model->getviw();

       if($this->session->userdata['role_id'] == 1)
       
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
             $this->load->view('admin/pass', $data);
         } else{
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if(!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('angga1', '<div class="alert alert-danger" role="alert">
                Password Lama Salah!
              </div>');
              redirect('admin/pass');
            } else {
                if($current_password == $new_password ){
                    $this->session->set_flashdata('angga', '<div class="alert alert-danger" role="alert">
                    Password baru dan lama tidak boleh sama!
                  </div>');
                    redirect('admin/pass');
                } else {
                    //passwordnya bener
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('angga2', '<div class="alert alert-succes" role="alert">
                    Password change!
                  </div>');
                    redirect('admin/pass');
                }
            }
         }
    }


    //=================================== fungsi tampil & hapus table user ===================================
   
   public function red(){
    //ini adalah sebuah logic by erlangga jika;
    //seseorang mencoba mengakses controller ini, jika dia bukan seorang admin.
    if($this->session->userdata['role_id'] == 1){

    } else {
       //lepaskann/buang informasi login dari seseorang tersebut.
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //lemparkan ke halaman pemblokiran
       redirect('auth/blocked');
    }
    //end logic
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

     //ambil fungsi getAll untuk menampilkan semua data mahasiswa
     $data["data_User"] = $this->user_model->getAll();
     $data["data_admin"] = $this->admin_model->getviw();
     //load view header.php pada folder views/templates
    
     //load view index.php pada folder views/mahasiswa
     $this->load->view('admin/view1', $data);
   
      
  }
      
    
    public function delete()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->user_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }

    
                      // ================================================================================ //
    // ======================================== ini adalah sebuah fungsi edit data user ================================ //

    public function editt($id = null)
    {
        //ini adalah sebuah logic by erlangga jika;
        //seseorang mencoba mengakses controller ini, jika dia bukan seorang admin.
        if($this->session->userdata['role_adm'] == 1){
  
        } else {
           //lepaskann/buang informasi login dari seseorang tersebut.
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            //lemparkan ke halaman pemblokiran
           redirect('auth/blocked');
        }
        //end logic
       
        
        

        if (!isset($id)) redirect('admin/red');

        
    $user = $this->user_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());


        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $role_id = $this->input->post('role_id');
        $waktu = $this->input->post('waktu');
        

        $data = array (
            'name' => $name,
            'email' => $email,
            'role_id' => $role_id,
            'waktu' => $waktu,
            
        );

    if ($validation->run() ) {
        $user->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("admin/read");
    }
    
    $data["data_user"] = $user->getById($id);
    if (!$data["data_user"]) show_404();

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data["data_admin"] = $this->admin_model->getviw();

    
    $this->load->view('admin/edit', $data);
 
    }

    public function update(){
       //ini adalah sebuah logic by erlangga jika;
        //seseorang mencoba mengakses controller ini, jika dia bukan seorang admin.
        if($this->session->userdata['role_id'] == 1){
  
        } else {
           //lepaskann/buang informasi login dari seseorang tersebut.
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            //lemparkan ke halaman pemblokiran
           redirect('auth/blocked');
        }
        //end logic
        $data["data_admin"] = $this->admin_model->getviw();
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
   
  
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $role_id = $this->input->post('role_id');
        $image = $this->input->post('image');
        $is_active = $this->input->post('is_active');
        $password = $this->input->post('password');
        $role_adm = $this->input->post('role_adm');
        $waktu = $this->input->post('waktu');
        

        $data = array (
            'name' => $name,
            'email' => $email,
            'role_id' => $role_id,
            'image' => $image,
            'is_active' => $is_active,
            'password' => $password,
            'role_adm' => $role_adm,
            'waktu' => $waktu,
            
        );

         $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->user_model->update($data, );
        redirect('menu/admin');

       
    }

     // ======================================== ini adalah sebuah fungsi edit data user end ================================
    




     //======================================= fungi tampil data contact ====================================

     public function contact(){
        //ini adalah sebuah logic by erlangga jika;
    //seseorang mencoba mengakses controller ini, jika dia bukan seorang admin.
    if($this->session->userdata['role_id'] == 1){

    } else {
       //lepaskann/buang informasi login dari seseorang tersebut.
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //lemparkan ke halaman pemblokiran
       redirect('auth/blocked');
    }
    //end logic

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

     //ambil fungsi getAll untuk menampilkan semua data mahasiswa
     $data["data_contact"] = $this->contact_model->tampil();
     $data["data_admin"] = $this->admin_model->getviw();
     //load view header.php pada folder views/templates
    
     //load view index.php pada folder views/mahasiswa
     $this->load->view('admin/view_contact', $data);
   
     }

     public function hapus()
    {
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->contact_model->hapus($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data  berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }


    public function upload(){
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
        
     $this->load->view('admin/upload', array('error' => ' ' ));
 }

 public function aksi_upload(){
     $config['upload_path']          = './assets/erlanggaa/trial/';
     $config['allowed_types']        = 'gif|jpg|png|jpeg';
     $config['max_size']             = 500;
     $config['max_width']            = 1500;
     $config['max_height']           = 1000;

     $this->load->library('upload', $config);

     if ( ! $this->upload->do_upload('berkas')){
         $error = array('error' => $this->upload->display_errors());
         $this->load->view('admin/upload', $error);
     }else{
         $data = array('upload_data' => $this->upload->data());
         $this->session->set_flashdata('message', 'berhasil di upload');
         $this->load->view('admin/upload', $data);
     }
 }


   
}




