<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
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
        $this->load->model("diss_model"); //load model database diss      
        $this->load->model("disty_model"); //load model database diss    
        $this->load->model("dist_model"); // load model database diss3  
        $this->load->model("distq_model"); // load model databse diiss4
        $this->load->model("distw_model"); // load model database diss5
        $this->load->model("diste_model"); // load model database diss6
        $this->load->model("distr_model"); // load model database diss7
        $this->load->model("distt_model"); //load model table diss8 
        $this->load->model("distu_model"); //load model table diss9 
        $this->load->model("disti_model"); //load model table diss10
        $this->load->model("distd_model"); // load model table diss11
        $this->load->model("diss12_model"); // load model table diss12
        $this->load->model("disss14_model"); // load model table diss13
        $this->load->model("diss14_model"); // load model dari table diss14
        $this->load->model("diss15_model"); // load model diss 15 dari table diss 15
        $this->load->model("diss16_model"); // load model diss 15 dari table diss 16
        $this->load->model("artikel_model"); // load model dari table artikel
        $this->load->model("diss18_model"); // load model diss18
        $this->load->model("diss19_model"); // load model diss19
        $this->load->model("diss20_model"); // load model diss 20
        $this->load->model("diss21_model"); // load model diss 21
        $this->load->model("diss22_model"); // load model diss 22
        $this->load->model("diss23_model"); // load model diss 23
    }


// ============================================= form edit tabel diss ===================================================
    public function check($id = null)
    {
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
       

        if (!isset($id)) redirect('admin/index');

        
    $user = $this->display_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());


    $gambar = $this->input->post('gambar');
    $tag = $this->input->post('tag');
    $judul = $this->input->post('judul');
    $link = $this->input->post('link');
    $uplodby = $this->input->post('uplodby');
    $textdiss1 = $this->input->post('textdiss1');
    $textdiss2 = $this->input->post('textdiss2');
    $textdiss3 = $this->input->post('textdiss3');
    $textdiss4 = $this->input->post('textdiss4');
    $textdiss5 = $this->input->post('textdiss5');
        

        $data = array (
            'gambar' => $gambar,
            'tag' => $tag,
            'judul' => $judul,
            'link' => $link,
            'uplodby' => $uplodby,
            'textdiss1' => $textdiss1,
            'textdiss2' => $textdiss2,
            'textdiss3' => $textdiss3,
            'textdiss4' => $textdiss4,
            'textdiss5' => $textdiss5,
            'waktu' => time()
            
        );

    if ($validation->run() ) {
        $diss->update();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil disimpan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
        redirect("admin/read");
    }
    
    $data["data_display"] = $user->getid($id);
    if (!$data["data_display"]) show_404();

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    
    $this->load->view('edit/index', $data);
 
    }

    public function updatee(){
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
   
         $gambar = $this->input->post('gambar');
         $tag = $this->input->post('tag');
         $judul = $this->input->post('judul');
         $link = $this->input->post('link');
         $uplodby = $this->input->post('uplodby');
         $textdiss1 = $this->input->post('textdiss1');
         $textdiss2 = $this->input->post('textdiss2');
         $textdiss3 = $this->input->post('textdiss3');
         $textdiss4 = $this->input->post('textdiss4');
         $textdiss5 = $this->input->post('textdiss5');
        

        $data = array (
            'gambar' => $gambar,
            'tag' => $tag,
            'judul' => $judul,
            'link' => $link,
            'uplodby' => $uplodby,
            'textdiss1' => $textdiss1,
            'textdiss2' => $textdiss2,
            'textdiss3' => $textdiss3,
            'textdiss4' => $textdiss4,
            'textdiss5' => $textdiss5,
            'waktu' => time()
            
        );

         $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->display_model->update($data, );
        redirect('admin/index');

       
    }
// ============================================= form edit tabel diss ===================================================


public function check1($id = null)
    {
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
       

        if (!isset($id)) redirect('admin/index');

        
    $user = $this->diss_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());


    $gambar1 = $this->input->post('gambar1');
    $tag1 = $this->input->post('tag1');
    $judul1 = $this->input->post('judul1');
    $link1 = $this->input->post('link1');
    $uplodby1 = $this->input->post('uplodby1');
    $textdis1 = $this->input->post('textdis1');
    $textdis2 = $this->input->post('textdis2');
    $textdis3 = $this->input->post('textdis3');
    $textdis4 = $this->input->post('textdis4');
    $textdis5 = $this->input->post('textdis5');
        

        $data = array (
            'gambar1' => $gambar1,
            'tag1' => $tag1,
            'judul1' => $judul1,
            'link1' => $link1,
            'uplodby1' => $uplodby1,
            'textdis1' => $textdis1,
            'textdis2' => $textdis2,
            'textdis3' => $textdis3,
            'textdis4' => $textdis4,
            'textdis5' => $textdis5,
            'waktu1' => time()
            
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
    
    $data["data_diss"] = $user->getuid($id);
    if (!$data["data_diss"]) show_404();

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    
    $this->load->view('edit/edit1', $data);
 
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
         $data['user'] = $this->db->get_where('user', ['email' =>
         $this->session->userdata('email')])->row_array();
   
         $gambar1 = $this->input->post('gambar1');
         $tag1 = $this->input->post('tag1');
         $judul1 = $this->input->post('judul1');
         $link1 = $this->input->post('link1');
         $uplodby1 = $this->input->post('uplodby1');
         $textdis1 = $this->input->post('textdis1');
         $textdis2 = $this->input->post('textdis2');
         $textdis3 = $this->input->post('textdis3');
         $textdis4 = $this->input->post('textdis4');
         $textdis5 = $this->input->post('textdis5');
        

        $data = array (
            'gambar1' => $gambar1,
            'tag1' => $tag1,
            'judul1' => $judul1,
            'link1' => $link1,
            'uplodby1' => $uplodby1,
            'textdis1' => $textdis1,
            'textdis2' => $textdis2,
            'textdis3' => $textdis3,
            'textdis4' => $textdis4,
            'textdis5' => $textdis5,
            'waktu1' => time()
            
        );

         $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->diss_model->update($data, );
        redirect('admin/index');

       
    }
// ============================================= form edit tabel diss ===================================================



// ============================================= form edit tabel diss2 ===================================================
public function check2($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->disty_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_las"] = $user->getid($id);
if (!$data["data_las"]) show_404();

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit2', $data);

}

public function updatet(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->disty_model->update($data, );
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss2 ===================================================
public function check3($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->dist_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_dist"] = $user->getid($id);
if (!$data["data_dist"]) show_404();

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit3', $data);

}

public function updatr(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->dist_model->update($data, );
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check4($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->distq_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_distq"] = $user->getid($id); //diganti
if (!$data["data_distq"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit4', $data); //diganti

}

public function updatrt(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distq_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check5($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->distw_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_fas"] = $user->getid($id); //diganti
if (!$data["data_fas"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit5', $data); //diganti

}

public function updatry(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distw_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check6($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->diste_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_fasq"] = $user->getid($id); //diganti
if (!$data["data_fasq"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit6', $data); //diganti

}

public function updatru(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diste_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check7($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->distr_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_fasw"] = $user->getid($id); //diganti
if (!$data["data_fasw"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit7', $data); //diganti

}

public function updatri(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distr_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================
public function check8($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->distt_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_fase"] = $user->getid($id); //diganti
if (!$data["data_fase"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit8', $data); //diganti

}

public function updatro(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distt_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check9($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->distu_model;
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_fasr"] = $user->getid($id); //diganti
if (!$data["data_fasr"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit9', $data); //diganti

}

public function updatrp(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distu_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check10($id = null)
{
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
   

    if (!isset($id)) redirect('admin/index');

    
$user = $this->disti_model; //ganti ini
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_disti"] = $user->getid($id); //diganti
if (!$data["data_disti"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit10', $data); //diganti

}

public function updatra(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->disti_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================
public function check11($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->distd_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_erlngga"] = $user->getid($id); //diganti
if (!$data["data_erlngga"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit11', $data); //diganti

}

public function updatrap(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->distd_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================



// ============================================= form edit tabel diss4 ===================================================
public function check12($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss12_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss12"] = $user->getid($id); //diganti
if (!$data["data_diss12"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit12', $data); //diganti

}

public function updatraf(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss12_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================
public function check13($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->disss14_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_disss13"] = $user->getid($id); //diganti
if (!$data["data_disss13"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit13', $data); //diganti

}

public function updatrag(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->disss14_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check14($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss14_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss14"] = $user->getid($id); //diganti
if (!$data["data_diss14"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit14', $data); //diganti

}

public function updatrah(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss14_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================
public function check15($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss15_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss15"] = $user->getid($id); //diganti
if (!$data["data_diss15"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit15', $data); //diganti

}

public function updatraj(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss15_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================


public function check16($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss16_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss16"] = $user->getid($id); //diganti
if (!$data["data_diss16"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit16', $data); //diganti

}

public function updatrak(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss16_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================

public function addar(){
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
  
   $this->form_validation->set_rules('textdiss1', 'textdiss1', 'required|trim|min_length[5]');

   if ($this->form_validation->run() == false) {
       $this->load->view('edit/tambah');
   } else {
       $data = [
           'gambar' =>  htmlspecialchars($this->input->post('gambar')),
           'judul' =>  htmlspecialchars($this->input->post('judul')),
           'link' => htmlspecialchars($this->input->post('link')),
           'tag' => htmlspecialchars($this->input->post('tag')),
           'uplodby' => htmlspecialchars($this->input->post('uplodby')),
           'waktu' => htmlspecialchars($this->input->post('waktu')),
           'textdiss1' => htmlspecialchars($this->input->post('textdiss1')),
           'textdiss2' => htmlspecialchars($this->input->post('textdiss2')),
           'textdiss3' => htmlspecialchars($this->input->post('textdiss3')),
           'textdiss4' => htmlspecialchars($this->input->post('textdiss4')),
           'textdiss5' => htmlspecialchars($this->input->post('textdiss5')),
          
           
       ];

       $this->db->insert('artikel', $data);

   $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();

   redirect("admin/index");
  
//    $this->load->view('admin/index', $data);


}
}
public function check17($id = null)
{
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
  
 
   if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

   
$user = $this->artikel_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
   

   $data = array (
       'gambar' => $gambar,
       'tag' => $tag,
       'judul' => $judul,
       'link' => $link,
       'uplodby' => $uplodby,
       'textdiss1' => $textdiss1,
       'textdiss2' => $textdiss2,
       'textdiss3' => $textdiss3,
       'textdiss4' => $textdiss4,
       'textdiss5' => $textdiss5,
       'waktu' => time()
       
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

$data["data_artikel"] = $user->getid($id); //diganti
if (!$data["data_artikel"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit17', $data); //diganti

}

public function updatral(){
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

    $gambar = $this->input->post('gambar');
    $tag = $this->input->post('tag');
    $judul = $this->input->post('judul');
    $link = $this->input->post('link');
    $uplodby = $this->input->post('uplodby');
    $textdiss1 = $this->input->post('textdiss1');
    $textdiss2 = $this->input->post('textdiss2');
    $textdiss3 = $this->input->post('textdiss3');
    $textdiss4 = $this->input->post('textdiss4');
    $textdiss5 = $this->input->post('textdiss5');
   

   $data = array (
       'gambar' => $gambar,
       'tag' => $tag,
       'judul' => $judul,
       'link' => $link,
       'uplodby' => $uplodby,
       'textdiss1' => $textdiss1,
       'textdiss2' => $textdiss2,
       'textdiss3' => $textdiss3,
       'textdiss4' => $textdiss4,
       'textdiss5' => $textdiss5,
       'waktu' => time()
       
   );

    $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();

   $this->artikel_model->update($data, ); //diganti 
   redirect('admin/index');

  
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================


public function check18($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss18_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss18"] = $user->getid($id); //diganti
if (!$data["data_diss18"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit18', $data); //diganti

}

public function updatraz(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss18_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================


public function check19($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss19_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss19"] = $user->getid($id); //diganti
if (!$data["data_diss19"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit19', $data); //diganti

}

public function updatrax(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss19_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================


public function check20($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss20_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss20"] = $user->getid($id); //diganti
if (!$data["data_diss20"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit20', $data); //diganti

}

public function updatrac(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss20_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

// ============================================= form edit tabel diss4 ===================================================


public function check21($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss21_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss21"] = $user->getid($id); //diganti
if (!$data["data_diss21"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit21', $data); //diganti

}

public function updatrav(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss21_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================



// ============================================= form edit tabel diss4 ===================================================


public function check22($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss22_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss22"] = $user->getid($id); //diganti
if (!$data["data_diss22"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit22', $data); //diganti

}

public function updatrab(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss22_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================


// ============================================= form edit tabel diss4 ===================================================


public function check23($id = null)
{
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
   
  
    if (!isset($id)) redirect('admin/index'); // jika tidak ada id yang diambil , lempar kehalaman admin/index

    
$user = $this->diss23_model; //ganti ini dist_model di deklariskan /diserderhanakan menjadi $user
$validation = $this->form_validation;
$validation->set_rules($user->rules());


$gambar = $this->input->post('gambar');
$tag = $this->input->post('tag');
$judul = $this->input->post('judul');
$link = $this->input->post('link');
$uplodby = $this->input->post('uplodby');
$textdiss1 = $this->input->post('textdiss1');
$textdiss2 = $this->input->post('textdiss2');
$textdiss3 = $this->input->post('textdiss3');
$textdiss4 = $this->input->post('textdiss4');
$textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
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

$data["data_diss23"] = $user->getid($id); //diganti
if (!$data["data_diss23"]) show_404();  //diganti

$data['user'] = $this->db->get_where('user', ['email' =>
$this->session->userdata('email')])->row_array();

$this->load->view('edit/edit23', $data); //diganti

}

public function updatran(){
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

     $gambar = $this->input->post('gambar');
     $tag = $this->input->post('tag');
     $judul = $this->input->post('judul');
     $link = $this->input->post('link');
     $uplodby = $this->input->post('uplodby');
     $textdiss1 = $this->input->post('textdiss1');
     $textdiss2 = $this->input->post('textdiss2');
     $textdiss3 = $this->input->post('textdiss3');
     $textdiss4 = $this->input->post('textdiss4');
     $textdiss5 = $this->input->post('textdiss5');
    

    $data = array (
        'gambar' => $gambar,
        'tag' => $tag,
        'judul' => $judul,
        'link' => $link,
        'uplodby' => $uplodby,
        'textdiss1' => $textdiss1,
        'textdiss2' => $textdiss2,
        'textdiss3' => $textdiss3,
        'textdiss4' => $textdiss4,
        'textdiss5' => $textdiss5,
        'waktu' => time()
        
    );

     $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->diss23_model->update($data, ); //diganti 
    redirect('admin/index');

   
}
// ============================================= form edit tabel diss2 end ===================================================

}