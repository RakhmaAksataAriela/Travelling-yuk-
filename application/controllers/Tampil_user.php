<?php
class Tampil_user extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_M');
	}

	public function index(){
		$data = new StdClass();//mendeklarasikan string data sebagai objek stdClass
		$data->user = $this->User_M->gets()/*mengambil data*/->result();//result(array&object)=pemroses gets.
		$this->load->view('Tampil_user_v', $data);
	}
	public function delete($id)
	{
		$this->User_M->delete($id);
		redirect(base_url('Tampil_user'));//redirect=Untuk mengalihkan ke website yang dituju
	}

}
?>