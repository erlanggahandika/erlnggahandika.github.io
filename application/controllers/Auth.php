<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
       
        // erlangga();
    }

    public function index()
    {
        if($this->session->userdata('email')){
            redirect('user/index');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'format email salah',
            'required' => 'Email kosong'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password kosong'
        ]);

        $this->form_validation->set_rules('waktu', 'waktu');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            // validasi sukses ini ya
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $waktu = $this->input->post('waktu');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif 
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'roleacc' => $user['roleacc'],
                        'waktu' => $user['waktu'],
                        'role_adm' => $user['role_adm']
                        
                    ];
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1){
                        // halaman admin
                        $this->session->set_flashdata('angga1', '<div class="alert alert-info" role="alert">
                        Selamat Datang!
                      </div>');
                        redirect('admin/index');
                    }  else{
                        // halaman user
                        $this->session->set_flashdata('angga1', '<div class="alert alert-info" role="alert">
                        Selamat Datang!
                      </div>');
                        redirect('user/homee');
                    }
                } else {
                    $this->session->set_flashdata('message3', 'Password salah');
                    redirect('auth/index');
                }
            } else {
                $this->session->set_flashdata('message2', 'silahkan aktivasi akun ini, melalui email.');
                redirect('auth/index');

                // // jika user is active  adalah 0 maka lempar ke halaman user
                // redirect('user/index');
            }
        } else {
            $this->session->set_flashdata('message1', 'Password atau email salah');
            redirect('auth/index');
        }
    }

    public function daftar()
    {
        if($this->session->userdata('email')){
            redirect('user/index');
        }
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Nama kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email telah terdaftar',
            'required' => 'Email kosong',
            'valid_email' => 'format email salah'

        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
            'min_length' => 'password sangat pendek!',
            'required' => 'Password kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/daftar');
        } else {
            $data = [
                'name' =>  htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'image' => 'default.jpg',
                'roleacc' => 'member',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'role_adm' => 0,
                'is_active' => 1,
                'addres' => '',
                'country' => '',
                'no_hp' => '',
                'city' => '',
                'waktu' => time(),
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            // $this->_sendEmail();

            $this->session->set_flashdata('message', 'selamat , akun anda sudah dibuat. Silahkan login!');
            redirect('auth/index');
        }
    }

    // private function _sendEmail()
    // {
    //     $config = [
    //         'protocol'  => 'smtp',
    //         'smtp_host' => 'ssl://smtp.googlemail.com',
    //         'smtp_user' => 'appleriaa@gmail.com',
    //         'smtp_pass' => 'angga232345',
    //         'smtp_port' => 465,
    //         'mailtype'  => 'html',
    //         'charset'   => 'utf-8',
    //         'newline'   => "\r\n"

    //     ];
    //     $this->load->library('email', $config);
    //     $this->email->initialize($config);

    //     $this->email->from('appleriaa@gmail.com', 'Appleria.co.id');
    //     $this->email->to('erlanggahandika73@gmail.com');
    //     $this->email->subject('testing');
    //     $this->email->message('hello');


    //     if($this->email->send()) {
    //         return true;
    //     } else {
    //         echo $this->email->print_debugger();
    //         die;
    //     }
    // }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', 'Hi! kamu berhasil logout');
        redirect('display/log');
    }

    // public function admin()
    // {
    //     $this->load->view('auth/admin');
    // }

    public function eror404(){
        $this->load->view('auth/eror404');
    }

    public function eror(){
        $this->load->view('auth/eror');
    }

    public function blocked(){
        $this->load->view('auth/blocked');
    }

    
}
