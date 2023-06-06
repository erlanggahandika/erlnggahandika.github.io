<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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
        $this->load->model("nav_model"); //load model database admin   
        $this->load->model("catagory_model"); // load model katagory untuk user
        $this->load->model("diss16_model"); // load model katagory untuk user
    }

    public function admin()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
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
        $data["data_User"] = $this->user_model->getAll();
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('menu/admin', $data);
    }

    public function tabel()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            // lempar ke halaman login untuk penyusup
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            // lempar ke sini
            redirect('auth/blocked');
        }
        // keamanan url admin end

        
        $data["data_admin"] = $this->admin_model->getviw();
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('menu/menu_admin', $data);
    }

   
        public function delete()
        {
            $id = $this->input->get('id');
            if (!isset($id)) show_404();
            $this->admin_model->delete($id);
            $msg['success'] = true;
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data  berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            $this->output->set_output(json_encode($msg));
        }

        public function tambah()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            // lempar ke halaman login untuk penyusup
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            // lempar ke sini
            redirect('auth/blocked');
        }
        // keamanan url admin end


        $user = $this->admin_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($user->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("menu/tabel");
        }

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
       
        $this->load->view('menu/tambah', $data);
       
    }

    public function huff()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            // lempar ke halaman login untuk penyusup
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            // lempar ke sini
            redirect('auth/blocked');
        }
        // keamanan url admin end


        $user = $this->diss16_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($user->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("admin/index");
        }

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
       
        $this->load->view('edit/tambah', $data);
       
    }


    // ==== fungsi edit table admin ======

    public function edit($id = null)
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

        
    $user = $this->admin_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());


        $menu = $this->input->post('menu');
        $link = $this->input->post('link');
        $icon = $this->input->post('icon');
        

        $data = array (
            'menu' => $menu,
            'link' => $link,
            'icon' => $icon,
            
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
    
   

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data["data_admin"] = $user->getuid($id);
    if (!$data["data_admin"]) show_404();

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    
    $this->load->view('menu/edit', $data);
 
    }

    public function update(){
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
        $data["data_admin"] = $this->admin_model->getviw();
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
   
  
         $menu = $this->input->post('menu');
         $link = $this->input->post('link');
         $icon = $this->input->post('icon');
         
 
         $data = array (
             'menu' => $menu,
             'link' => $link,
             'icon' => $icon,
             
         );

         $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        


        $this->admin_model->update($data, );
        redirect('menu/tabel');

       
    }



    // ========================= tabel list navigasi user ==========================
    // =============================== by erlangga handika =============================

    public function list()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            // lempar ke halaman login untuk penyusup
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            // lempar ke sini
            redirect('auth/blocked');
        }
        // keamanan url admin end

        
        $data["data_nav"] = $this->nav_model->getviw();
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('menu/nav_user', $data);
    }

   
        public function deletee()
        {
            $id = $this->input->get('id');
            if (!isset($id)) show_404();
            $this->nav_model->delete($id);
            $msg['success'] = true;
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data  berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            $this->output->set_output(json_encode($msg));
        }

        public function add()
        {
            // keamanan url admin stater pack
            if($this->session->userdata['role_adm'] == 1){
               
            } else {
                // lempar ke halaman login untuk penyusup
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('role_id');
                // lempar ke sini
                redirect('auth/blocked');
            }
            // keamanan url admin end
    
    
            $user = $this->nav_model; //objek model
            $validation = $this->form_validation; //objek form validation
            $validation->set_rules($user->rules()); //menerapkan rules validasi pada mahasiswa_model
            //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
            if ($validation->run()) {
                $user->save();
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
                redirect("menu/list");
            }
    
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
           
            $this->load->view('menu/add_nav', $data);
           
        }

        public function nav_edit($id = null)
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
           
            
            
    
            if (!isset($id)) redirect('menu/list');
    
            
        $user = $this->nav_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
    
    
            $menu = $this->input->post('menu');
            $link = $this->input->post('link');
          
            
    
            $data = array (
                'menu' => $menu,
                'link' => $link,
               
                
            );
    
        if ($validation->run() ) {
            $user->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("menu/list");
        }
        
       
    
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        $data["data_nav"] = $user->getuid($id);
        if (!$data["data_nav"]) show_404();
    
        
        $this->load->view('menu/nav_edit', $data);
     
        }
    
        public function updte(){
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
            $data["data_nav"] = $this->nav_model->getviw();
             $data['user'] = $this->db->get_where('user', ['email' =>
             $this->session->userdata('email')])->row_array();
       
      
             $menu = $this->input->post('menu');
             $link = $this->input->post('link');
           
             
     
             $data = array (
                 'menu' => $menu,
                 'link' => $link,
                
                 
             );
    
             $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            
    
    
            $this->nav_model->update($data, );
            redirect('menu/list');
    
           
        }
    

    // ================================ end =====================================================


    // =================================================================================================== //
    // ======================= ini fungsi untuk kategory user / crud db catagory =============================================== //

    public function catalog()
    {
        // keamanan url admin stater pack
        if($this->session->userdata['role_adm'] == 1){
           
        } else {
            // lempar ke halaman login untuk penyusup
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            // lempar ke sini
            redirect('auth/blocked');
        }
        // keamanan url admin end

        
        $data["data_cat"] = $this->catagory_model->getviw();
        

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        
        // // halaman untuk user
        $this->load->view('menu/catagory_tabel', $data);
    }

    public function addct()
        {
            // keamanan url admin stater pack
            if($this->session->userdata['role_adm'] == 1){
               
            } else {
                // lempar ke halaman login untuk penyusup
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('role_id');
                // lempar ke sini
                redirect('auth/blocked');
            }
            // keamanan url admin end
    
    
            $user = $this->catagory_model; //objek model
            $validation = $this->form_validation; //objek form validation
            $validation->set_rules($user->rules()); //menerapkan rules validasi pada mahasiswa_model
            //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
            if ($validation->run()) {
                $user->save();
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
                redirect("menu/catalog");
            }
    
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
           
            $this->load->view('menu/add_ctg', $data);
           
        }

    public function deletya()
        {
            $id = $this->input->get('id');
            if (!isset($id)) show_404();
            $this->catagory_model->delete($id);
            $msg['success'] = true;
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data  berhasil dihapus.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button></div>');
            $this->output->set_output(json_encode($msg));
        }

    public function editlg($id = null)
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
           
            
            
    
            if (!isset($id)) redirect('menu/catalog');
    
            
        $user = $this->catagory_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
    
    
            $menu = $this->input->post('menu');
            $link = $this->input->post('link');
            $icon = $this->input->post('icon');
            
    
            $data = array (
                'menu' => $menu,
                'link' => $link,
                'icon' => $icon,
                
            );
    
        if ($validation->run() ) {
            $user->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("menu/catalog");
        }
        
       
    
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
    
        $data["data_cat"] = $user->getuid($id);
        if (!$data["data_cat"]) show_404();
    
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
    
        
        $this->load->view('menu/edit_ctg', $data);
     
        }
    
        public function updatecuy(){
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
            $data["data_cat"] = $this->catagory_model->getviw();
             $data['user'] = $this->db->get_where('user', ['email' =>
             $this->session->userdata('email')])->row_array();
       
      
             $menu = $this->input->post('menu');
             $link = $this->input->post('link');
             $icon = $this->input->post('icon');
             
     
             $data = array (
                 'menu' => $menu,
                 'link' => $link,
                 'icon' => $icon,
                 
             );
    
             $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
    
            
    
    
            $this->catagory_model->update($data, );
            redirect('menu/catalog');
    
           
        }


    

    
}