<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MY_Controller extends CI_Controller{
		protected $header = 'main/header';
		protected $footer = 'main/footer';

		public function __construct(){
			parent::__construct();
			$this->load->library("Aauth");
			$this->load->model('user_model');
		}

		protected function loadHeader(){
		$this->load->view($this->header);
		}

		protected function loadFooter(){
			$this->load->view($this->footer);
		}

		protected function loadTemplate($template,$data = array(),$userid = NULL){
			$this->loadHeader();
			$this->load->view($template,$data,$data);
			$this->loadFooter();
		}

		protected function sendToLoginPage(){
			redirect('admin/login');
		}

		protected function getCurrentUserID(){
			if($this->aauth->is_loggedin()){
				return $this->aauth->get_user()->id;
			}else{
				$this->sendToLoginPage();
			}
		}
	}
 ?>