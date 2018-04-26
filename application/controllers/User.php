<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('User_M');
	}

	public function form(){
		$this->load->view('form_user_v');
	}

	public function add(){
		//untuk mendapatkan data
		$uname = $this->input->post("username");
		$pass = $this->input->post("password");
		$full = $this->input->post("fullname");
		$level = $this->input->post("level");

		if ($this->User_M->add_user($uname, $pass, $full, $level)) {
			# code...
			echo "Data berhasil dimasukkan.";
			echo "<br>";
			echo "<a href=".base_url().">Back</a>";
		}else{
			echo "Data gagal dimasukkan.";
			echo "<br>";
			echo "<a href=".base_url().">Back</a>";
		}
	}
}
?>