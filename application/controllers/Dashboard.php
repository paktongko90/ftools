<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller{
		protected $layout = 'dashboard/';

		public function index(){
			//if($this->aauth->is_loggedin()){
				$this->loadTemplate($this->layout.'index');
			//}else{
			//	$this->sendToLoginPage();
			//}
		}
	}
 ?>