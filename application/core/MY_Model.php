<?php

/**
* 
*/
class MY_Model extends CI_Model
{
	
	public $table;
	function __construct()
	{
		parent::__construct();		
	}

	public function find($user_id){
		return $this->db->where('user_id',$user_id)->get($this->table)->result();
	}

	public function findAllPost(){
		return $this->db->get($this->table)->result();
	}

	public function login()
	{
		$this->db->where('user_email', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get($this->table);
		if($query->num_rows == 1)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function find_by_id($id){

		return $this->db->where('id',$id)->get($this->table)->row();
	}

	public function find_by_comment($id){

		return $this->db->where('post_id',$id)->get($this->table)->result();
	}

	public function create($data){
		return $this->db->insert($this->table,$data);
	}

	public function update($id,$data){
		return $this->db->where('id',$id)->update($this->table,$data);
	}

	public function delete($id){
		return $this->db->where('id',$id)->delete($this->table);
	}

	public function findAllComment(){
		return $this->db->where('posts.user_id',$this->session->userdata['user_id'])->select('comments.*,posts.*,comments.id as cid')->from('comments')->join('posts', 'posts.id = comments.post_id')->get()->result();
	}

	public function count_comment($id){
		return $this->db->where('post_id',$id)->from('comments')->count_all_results();
	}
}

?>