<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Displaying the comments of the blog
* MY_Controller is defined under the "core" folder
*/
class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function login()
	{
		$query = $this->user->login();	
			if($query)
			{
				$data = array(
					'is_logged_in' => true,
					'user_id' => $query->id,
				);
				$this->session->set_userdata($data);			
				redirect('index.php/Posts'); 
			}
			else
			{
				$data['error'] = 'Oops! Invalid Username and password. Please try again!!!';
				$this->load->view('login',$data);
			}
	}

	public function logout()
	{
		$this->session->sess_destroy();		
		redirect('publicController');
	}

	public function register()
	{
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'user_email' => $this->input->post('user_email'),
			'password' => md5($this->input->post('password')),
			'blog_title' => $this->input->post('blog_title')
		);

		$result = $this->user->create($data);

		redirect('Posts');

	}
}
?>