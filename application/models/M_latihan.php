<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_latihan extends CI_Model {

	private $table = 'role';
	private $id    = 'id';

	public function get(){
		
		return $this->db->get($this->table);

	}

}

/* End of file M_latihan.php */
/* Location: ./application/models/M_latihan.php */