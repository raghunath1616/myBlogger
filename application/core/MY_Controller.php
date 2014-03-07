<?php

/**
* 
*/
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Post','post');
		$this->layout = 'layout/master';

		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('publicController');
		}
	}

	function postValidate($title=null,$content=null,$postedby=null){
		$this->form_validation->set_rules($title,'Title', 'trim|required');
		$this->form_validation->set_rules($content,'Content', 'trim|required');
		$this->form_validation->set_rules($postedby,'Posted By', 'trim|required');

		if($this->form_validation->run()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	
}

?>