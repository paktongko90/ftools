<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User extends MY_Controller{

		protected $loginView = '/login/';

		public function action(){
			if($this->aauth->login($this->input->post('username'),$this->input->post('password'),TRUE)){
				redirect('dashboard');
			}else{
				redirect('login');
			}
		}

		public function logout(){
			if($this->aauth->is_loggedin()){
				$this->aauth->logout();
				redirect('login','refresh');
			}else{
				redirect('login');
			}
		}

	}
?>