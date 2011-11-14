<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	 
	public function index(){
	
		
	
	}
	
	/*********************************************************************************************************************
	
	Create new project	
	
	*********************************************************************************************************************/
	
	public function create(){
	
		$data['view'] = 'new_project';
		$this->load->view( 'new_project' );
	
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/projects.php */