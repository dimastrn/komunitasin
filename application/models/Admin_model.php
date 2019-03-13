
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


    public function create($data)
    {
        $this->db->insert('tb_admin', $data);
    }
    
    public function read()
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_admin');
        $this->db->where('id_admin', $id);
        $query = $this->db->get();
        return $query->result();
    } 

    public function update($id, $data)
    {        
        $this->db->where('id_admin', $id);
        $this->db->update('tb_admin', $data);
    }

    public function delete($id) 
    {
        $this->db->where('id_admin', $id);        
        $this->db->delete('tb_admin');
    }

     public function exist_row_check($field,$data)
    {
        $this->db->where($field, $data);
        $this->db->from('tb_admin');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_user_detail($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_admin');

        if($query->num_rows() > 0){
            $data = $query->row();
            $query->free_result();
        } else {
            $data = NULL;
        }
        return $data;
    }

}

?>