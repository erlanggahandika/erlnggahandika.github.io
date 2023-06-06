<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    private $table = 'contact';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function aturan()
    {
        return [
            [
                'field' => 'name',  //samakan dengan atribute name pada tags input
                'label' => 'Name',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'subject',
                'label' => 'subject',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'message',
                'label' => 'message',
                'rules' => 'trim|required'
            ]
        ];
    }

    public function simpen()
    {
        $data = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "subject" => $this->input->post('subject'),
            "message" => $this->input->post('message'),
            
        );
        return $this->db->insert($this->table, $data);
    }

     //menampilkan semua data user
     public function tampil()
     {
         $this->db->from($this->table);
         $this->db->order_by("id", "desc");
         $query = $this->db->get();
         return $query->result();
         //fungsi diatas seperti halnya query 
         //select * from user order by id desc
     }

     //hapus data user
    public function hapus($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }


}