<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nav_model extends CI_Model
{
    private $table = 'nav_user';
    public function rules()
    {
        return [
            [
                'field' => 'menu',  //samakan dengan atribute name pada tags input
                'label' => 'menu',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'link',
                'label' => 'link',
                'rules' => 'trim|required'
            ],
            
        ];
    }

    public function getuid($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from user where id='$id'
    }

    public function getviw(){
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from user order by id desc
    }

    public function save()
    {
        $data = array(
            "menu" => $this->input->post('menu'),
            "link" => $this->input->post('link'),
          
            
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "menu" => $this->input->post('menu'),
            "link" => $this->input->post('link'),
           
          
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }


}