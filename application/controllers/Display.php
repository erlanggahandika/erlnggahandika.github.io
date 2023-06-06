<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Display extends CI_Controller
{
    public function lett(){
       
        //jika admin/user mencoba akses controller display
        // maka hapus session login sebagai log out
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //~end~
       
        $this->load->view('display/trialpage');
    }

    

    public function log(){
        
      
        //jika admin/user mencoba akses controller display
        // maka hapus session login sebagai log out
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //~end~

        $this->load->view('display/log');
    }

    public function trial(){
       //jika admin/user mencoba akses controller display
        // maka hapus session login sebagai log out
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        //~end~
       
       $this->load->view('display/trial');
    }

   
}