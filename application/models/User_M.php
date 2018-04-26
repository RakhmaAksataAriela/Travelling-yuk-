<?php
class User_M extends CI_Model{
	public function add_user($uname, $pass, $full, $level){
		$data_user = array(
			'username' => $uname,
			'password' => $pass,
			'fullname' => $full,
			'level' => $level
		);
		return $this->db->insert('user', $data_user);
	}
}
?>