<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $table = 'user';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
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
                'field' => 'roleacc',
                'label' => 'Roleacc',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'role_id',
                'label' => 'Role_id',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'date_created',
                'label' => 'No Hp',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'waktu',
                'label' => 'waktu',
                
            ],
            [
                'field' => 'addres',
                'label' => 'addres',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data user berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from user where id='$id'
    }

    //menampilkan semua data user
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from user order by id desc
    }

    //menyimpan data user
    public function save()
    {
        $data = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "role_id" => $this->input->post('role_id'),
            "date_created" => $this->input->post('date_created'),
            "addres" => $this->input->post('addres'),
            "no_hp" => $this->input->post('no_hp'),
            "waktu" => $this->input->post('waktu'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function aksiedit()
    {
        $data = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "role_id" => $this->input->post('role_id'),
          
        );
        return $this->db->update($this->table, $data);
    }


    //edit data user
    public function update()
    {
        $data = array(
            
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "role_id" => $this->input->post('role_id'),
            "no_hp" => $this->input->post('no_hp'),
            "addres" => $this->input->post('addres'),
            "is_active" => $this->input->post('is_active'),
            "password" => $this->input->post('password'),
            "role_adm" => $this->input->post('role_adm'),
            "waktu" => $this->input->post('waktu'),
            
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

   
}