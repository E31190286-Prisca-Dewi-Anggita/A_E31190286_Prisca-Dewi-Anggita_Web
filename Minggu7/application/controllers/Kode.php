<?php
class Kode extends CI_Controller{
	
	pubblic function hello ($var){
		switch(strtolower($var)){
			case 'php':
				$this->load->view('phpview');
				break;
			case'python':
			$this->load->view('pythonview');
				break;
			case'cpp':
				$this->load->view('javaview');
				break;
			default:
				echo 'Input URL Salah';
			}
		}else{
			echo 'Input URL Salah';
		}

		}
	}
}