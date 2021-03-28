<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Ferdian Octa","prodi"=>"MIF"],
			["nama"=>"Akbar Putra","prodi"=>"TKK"],
			["nama"=>"Ilham Maulana","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>