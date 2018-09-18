<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class customerModel extends CI_Model {
    public function addComplaint($data){
        $this->db->insert('complaints',$data);
        $insert_id = $this->db->insert_id();
        $data2 = array(
            'complaint_id' => $insert_id
        );
        $this->db->insert('complaint', $data2);
    }
}

