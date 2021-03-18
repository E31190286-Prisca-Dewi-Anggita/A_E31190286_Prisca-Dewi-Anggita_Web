<?php
class Demo_view2 extends CI_Controller{
	public function_construct(){
		parent::__contruct();
		$->load->helper('url')
	}

	public function index(){
		$this->load->view('demoview');
	}
}
?>