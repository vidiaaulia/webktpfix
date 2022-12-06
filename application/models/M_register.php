<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	public function cek($email, $password){
		
		return $this->db->query("
							SELECT * FROM user 
							WHERE
								email = '$email' AND
								password = '$password' AND
								is_active = 1
						");

	}

}