<?php

class Comment_model extends CI_Model{

	public $id = '';
	public $post_id = '';
	public $title = '';
	public $content = '';
	public $reply_to = '';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert_item(){
		$this->post_id = $_POST['post_id'];
		$this->title = $_POST['title'];
		$this->content = $_POST['content'];
		if(!empty($_POST['reply_to'])){
			$this->reply_to = $_POST['reply_to'];
		}

		$result = $this->db->insert('comments',$this);
		return $result;
	}

	function get_comments($id){
		$query = $this->db->get_where('comments',array('post_id'=>$id));
		return $query->result();
	}

	function del($id){
		$this->db->where('id',$id);
		$this->db->delete('comments');
		return $this->db->affected_rows();
	}

	function get_rcomments($rid){
		$query = $this->db->get_where('comments',array('reply_to'=>$rid));
		return $query->result();
	}

}
