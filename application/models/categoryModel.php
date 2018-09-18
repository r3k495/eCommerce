<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categoryModel extends CI_Model {
	public function getCategory($id){
		$this->db->select('*');
		$this->db->where('categoryid', $id);
		$query = $this->db->get('category');
		return $query->result();
	}
}