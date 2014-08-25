<?php

class Blog_model extends CI_Model{

	public $id = '';
	public $title = '';
	public $body = '';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_entries(){
		$query = $this->db->get('entries');
		return $query->result();
	}

	function insert_entry(){
		$this->title = $_POST['title'];
		$this->body = $_POST['body'];

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
