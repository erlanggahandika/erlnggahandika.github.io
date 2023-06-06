<?

class V_user extends CI_Model
{

    public function get_data(){
        return $this->db->get('user')->result_array();
    }
}
