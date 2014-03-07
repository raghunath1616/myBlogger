<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Displaying the posts of the blog
* MY_Controller is defined under the "core" folder
*/
class Posts extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Post','post');
	}

	function index(){
		
		$data['content'] = 'allPosts';
		$user_id = $this->session->userdata('user_id');
		$data['posts'] = $this->post->find($user_id);
		$this->load->view($this->layout,$data);
	}

	function create(){

		$validate = $this->postValidate('Title','Content','posted_by');
		
		if($validate == FALSE){			
			echo '<h4>Publishing your post is failed due to this : </h4>';
			echo validation_errors('<p style="color: red; font-size=14px;">');
			echo anchor(base_url(),'Go To Home');
		}
		else{
			$b = time ();
			$data = array(
				'user_id' => $this->session->userdata['user_id'],
				'Title' => $this->input->post('Title'),
				'Content' => $this->input->post('Content'),
				'Posted_by' => $this->input->post('posted_by'),
				'PostDate' => date("y/m/d",$b)
				);
			$this->post->create($data);

			redirect(base_url());
		}
		
	}

	function edit(){
		$data['content'] = 'edit';
		$data['posts'] = $this->post->find_by_id($this->uri->segment(3));
		$this->load->view($this->layout,$data);

	}
	function update(){

		$validate = $this->postValidate('title','content','Posted_by');
		
		if($validate == FALSE){			
			echo '<h4>Updating your post is failed due to this : </h4>';
			echo validation_errors('<p style="color: red; font-size=14px;">');
			echo anchor(base_url(),'Go To Home');
		}
		else{
			$b = time ();
			$data = array(
				'Title' => $this->input->post('title'),
				'Content' => $this->input->post('content'),
				'Posted_by' => $this->input->post('Posted_by'),
				'PostDate' => date("y/m/d",$b)
				);
			$data['posts'] = $this->post->update($this->uri->segment(3),$data);

			redirect(base_url());
		}
	}

	function delete(){
		$data['posts'] = $this->post->delete($this->uri->segment(3));
		redirect(base_url());
	}

}

?>