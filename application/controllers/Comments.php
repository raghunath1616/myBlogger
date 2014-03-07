<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Displaying the comments of the blog
* MY_Controller is defined under the "core" folder
*/
class Comments extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->layout = 'layout/master';
		$this->is_logged_in();
		$this->load->model('Comment','comment');
	}

	function index(){
		
		$data['content'] = 'allComments';
		$data['comments'] = $this->comment->findAllComment();
		
		$this->load->view($this->layout,$data);
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('publicController');
		}
	}

	function create(){

		$validate = $this->commentValidate('commented_by','comment');		

		if($validate == FALSE){
			echo '<h4>Posting your comment is failed due to this : </h4>';
			echo validation_errors('<p style="color: red; font-size=14px;">');
			echo anchor('publicController/','Go To Home');
		}
		else{
			$b = time();
			$data = array(
				'post_id'=> $this->input->post('post_id'),
				'comment'=> $this->input->post('comment'),
				'commented_by'=> $this->input->post('commented_by'),
				'comment_date'=> date("y/m/d",$b)
				);

			$this->comment->create($data);
			redirect('publicController/');
			
		}
		
	}

	function delete(){
		$data['comments'] = $this->comment->delete($this->uri->segment(3));
		redirect('Comments/');
	}

	function commentValidate($commented_by=null,$comment=null){
		$this->form_validation->set_rules($commented_by,'Name', 'trim|required');
		$this->form_validation->set_rules($comment,'comment', 'trim|required');

		if($this->form_validation->run()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

}

?>