<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diss_model extends CI_Model
{
    private $table = 'diss1';
    public function rules()
    {
        return [
            [
                'field' => 'gambar1',  //samakan dengan atribute name pada tags input
                'label' => 'gambar',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tag1',
                'label' => 'tag',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'judul1',
                'label' => 'judul',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'waktu1',
                'label' => 'waktu',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'uplodby1',
                'label' => 'uplodby',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'link1',
                'label' => 'link',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdis1',
                'label' => 'textdiss1',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdis2',
                'label' => 'textdiss1',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdis3',
                'label' => 'textdiss3',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdis4',
                'label' => 'textdiss4',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdis5',
                'label' => 'textdiss5',
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

    public function getnewss(){
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
            "gambar1" => $this->input->post('gambar1'),
            "tag1" => $this->input->post('tag1'),
            "judul1" => $this->input->post('judul1'),
            "waktu1" => $this->input->post('waktu1'),
            "uplodby1" => $this->input->post('uplodby1'),
            "link1" => $this->input->post('link1'),
            "textdis1" => $this->input->post('textdis1'),
            "textdis2" => $this->input->post('textdis2'),
            "textdis3" => $this->input->post('textdis3'),
            "textdis4" => $this->input->post('textdis4'),
            "textdis5" => $this->input->post('textdis5'),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "gambar1" => $this->input->post('gambar1'),
            "tag1" => $this->input->post('tag1'),
            "judul1" => $this->input->post('judul1'),
            "waktu1" => $this->input->post('waktu1'),
            "uplodby1" => $this->input->post('uplodby1'),
            "link1" => $this->input->post('link1'),
            "textdis1" => $this->input->post('textdis1'),
            "textdis2" => $this->input->post('textdis2'),
            "textdis3" => $this->input->post('textdis3'),
            "textdis4" => $this->input->post('textdis4'),
            "textdis5" => $this->input->post('textdis5'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }


}