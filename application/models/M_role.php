<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_role extends CI_Model {

	private $table = 'role';
	private $id    = 'id';

	public function get(){
		
		return $this->db->get($this->table);

	}	

	public function save($data){
		
		return $this->db->insert($this->table, $data);

	}

	public function delete($id){
		
		$this->db->where($this->id, $id);
		
		return $this->db->delete($this->table);

	}

	public function edit($id){
		
		$this->db->where($this->id, $id);
		
		return $this->db->get($this->table)->row_array();

	}

	public function update($id, $data){
		
		$this->db->where($this->id, $id);
		
		return $this->db->update($this->table, $data);

	}

	
}

/* End of file M_role.php */
/* Location: ./application/models/M_role.php */