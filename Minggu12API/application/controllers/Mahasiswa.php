<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); //mengload file mahasiswa_model.php yang ada di folder model

	}

	public function tambah(){ //memanggil fungsi tambah pada template di dalam view tambah mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input(){ //memanggil fungsi input username, password, nama, grup
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array( //mendeklarasikan array data
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		$this->Mahasiswa_model->input_data($data, 'tm_user'); //menginput data ke database dengan menggunakan mahasiswa_model
		redirect('Mahasiswa/index');//parameter yang berisi data-data yang diinputkan
	}

	public function index() //memanggil fungsi indek
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result(); // menyimpan data user untuk di pasang
		$this->template->views('crud/home_mahasiswa',$data);
	}
public function Api(){
	$data = $this->Mahasiswa_model->getAll();
	echo json_encode($data->result_array());
}
	public function ApiInsert(){
	$username = $this->input->POST('username');
	$password = $this->input->POST('pass');
	$nama = $this->input->POST('nama');
	$grub = $this->input->POST('grup');

	
	$data = array(
	'username' => $username,
	'password' => $password,
	'nama' => $nama,
	'grub' => $grub
);
	
	$this->Mahasiswa_model->input_data($data, 'tm_user');
	echo json_encode($array);
}
public function ApiDelete(){
	if ($this->input->POST('username')) {
		$where = array('username' => $this->input->POST('username'));
		if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
			$array = array('succses' => true);
		} else {
			$array = array('eror' => true);
		}
		echo json_encode($array);
	}
}
public function ApiUpdate(){
	$id = $this->input->POST('id');
	$username = $this->input->POST('username');
	$password = $this->input->POST('pass');
	$nama = $this->input->POST('nama');
	$grub = $this->input->POST('grup');

	// menyimpan data ke variabel $data dalam bentuk array
	$data = array(
	'username' => $username,
	'password' => $password,
	'nama' => $nama,
	'grub' => $grub
	);

	// Menangkap id pada from
	$where = array(
		'id'=>$id
	);

	// Menangkap semua data untuk di olah pada fungsi update_data pada class Mahasiswa_model
	$this->Mahasiswa_model->update_data($where,$data,'tm_user');
	echo json_encode($array);
}
}
?>