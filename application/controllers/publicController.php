<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class publicController extends CI_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Post','post');
		$this->load->model('Comment','comment');
	}

	function index(){
		//$data['content'] = 'publicView';
		$data['posts'] = $this->post->findAllPost();
		$this->load->view('publicView',$data);
	}

	function count($post_id){
		return $this->comment->count_comment($post_id);
	}

	function comment_per_post(){
		$data['posts'] = $this->post->find_by_id($this->uri->segment(3));
		$data['comments'] = $this->comment->find_by_comment($this->uri->segment(3));
		$this->load->view('comment_form',$data);
	}
}


