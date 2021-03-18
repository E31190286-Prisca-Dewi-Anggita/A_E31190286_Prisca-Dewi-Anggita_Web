<?php
class Demo_view extends CI_controller{
	public function index(){
		$this->load->view('headerview');
		$this->load->view('contentview');
		$this->load->view('footerview');
	}
}
?>