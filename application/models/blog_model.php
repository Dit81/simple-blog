<?php

class Blog_model extends CI_Model{

	public $id = '';
	public $title = '';
	public $body = '';
	public $author_id = '';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_entries($author_id){
		$query = $this->db->get_where('entries',array('author_id'=>$author_id));
		return $query->result();
	}

	function get_pentries($author_id,$limit,$offset){
		$query = $this->db->get_where('entries',array('author_id'=>$author_id),$limit,$offset);
		return $query->result();
	}

	function insert_entry(){
		$this->title = $_POST['title'];
		$this->body = $_POST['body'];
		$this->author_id = $_POST['author_id'];

		$result = $this->db->insert('entries', $this);
		return $result;	
	}

	function del($id){
		$this->db->where('id',$id);
		$this->db->delete('entries');
		return  $this->db->affected_rows();
	}

	function get_onepost($id){
		$query = $this->db->get_where('entries',array('id'=> $id));
		return $query->row_array();
	}

	function update_entry(){

		$this->db->where('id',$_POST['id']);
		$data['title'] = $_POST['title'];
		$data['body'] = $_POST['body'];
		$this->db->update('entries',$data);

	}

}
