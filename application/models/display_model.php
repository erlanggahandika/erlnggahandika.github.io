<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Display_model extends CI_Model
{
    private $table = 'diss';
    public function rules()
    {
        return [
            [
                'field' => 'gambar',  //samakan dengan atribute name pada tags input
                'label' => 'gambar',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'tag',
                'label' => 'tag',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'waktu',
                'label' => 'waktu',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'uplodby',
                'label' => 'uplodby',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'link',
                'label' => 'link',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdiss1',
                'label' => 'textdiss1',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdiss2',
                'label' => 'textdiss1',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdiss3',
                'label' => 'textdiss3',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdiss4',
                'label' => 'textdiss4',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'textdiss5',
                'label' => 'textdiss5',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getid($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from user where id='$id'
    }

    public function getnews(){
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
            "gambar" => $this->input->post('gambar'),
            "tag" => $this->input->post('tag'),
            "judul" => $this->input->post('judul'),
            "waktu" => $this->input->post('waktu'),
            "uplodby" => $this->input->post('uplodby'),
            "link" => $this->input->post('link'),
            "textdiss1" => $this->input->post('textdiss1'),
            "textdiss2" => $this->input->post('textdiss2'),
            "textdiss3" => $this->input->post('textdiss3'),
            "textdiss4" => $this->input->post('textdiss4'),
            "textdiss5" => $this->input->post('textdiss5'),
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data 
    public function update()
    {
        $data = array(
            "gambar" => $this->input->post('gambar'),
            "tag" => $this->input->post('tag'),
            "judul" => $this->input->post('judul'),
            "waktu" => $this->input->post('waktu'),
            "uplodby" => $this->input->post('uplodby'),
            "link" => $this->input->post('link'),
            "textdiss1" => $this->input->post('textdiss1'),
            "textdiss2" => $this->input->post('textdiss2'),
            "textdiss3" => $this->input->post('textdiss3'),
            "textdiss4" => $this->input->post('textdiss4'),
            "textdiss5" => $this->input->post('textdiss5'),
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }


}