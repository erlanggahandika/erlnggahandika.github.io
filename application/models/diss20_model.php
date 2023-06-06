<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diss20_model extends CI_Model
{
    private $table = 'diss20';
    public function rules()
    {
        return [
            [
                'field' => 'gambar',  //samakan dengan atribute name pada tags input
                'label' => 'gambar',  // label yang kan ditampilkan pada pesan error
                                     //rules validasi
            ],
            [
                'field' => 'tag',
                'label' => 'tag',
                                    
            ],
            [
                'field' => 'judul',
                'label' => 'judul',
                                    
            ],
            [
                'field' => 'waktu',
                'label' => 'waktu',
                                    
            ],
            [
                'field' => 'uplodby',
                'label' => 'uplodby',
               
            ],
            [
                'field' => 'link',
                'label' => 'link',
                                    
            ],
            [
                'field' => 'textdiss1',
                'label' => 'textdiss1',
          
            ],
            [
                'field' => 'textdiss2',
                'label' => 'textdiss1',
               
            ],
            [
                'field' => 'textdiss3',
                'label' => 'textdiss3',
               
            ],
            [
                'field' => 'textdiss4',
                'label' => 'textdiss4',
               
            ],
            [
                'field' => 'textdiss5',
                'label' => 'textdiss5',
               
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

    public function simpan()
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