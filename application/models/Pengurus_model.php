
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus_model extends CI_Model {


    public function create($data)
    {
        $this->db->insert('tb_komunitas', $data);
    }
    
    public function read()
    {
        $this->db->select('*');
        $this->db->from('tb_komunitas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_komunitas');
        $this->db->where('id_komunitas', $id);
        $query = $this->db->get();
        return $query->result();
    } 

    public function update($id, $data)
    {        
        $this->db->where('id_komunitas', $id);
        $this->db->update('tb_komunitas', $data);
    }

    public function delete($id) 
    {
        $this->db->where('id_komunitas', $id);        
        $this->db->delete('tb_komunitas');
    }

}

?>