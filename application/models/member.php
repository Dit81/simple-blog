<?php

class Member extends CI_Model{

	public $id = '';
	public $name = '';
	public $passwd = '';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function login(){
		$username = $_POST['name'];
		$password = $_POST['passwd'];

		$query = $this->db->get_where('members',array('name'=>$username,'passwd'=>$password));
		return $query->row_array();
	}

	function register(){
		$this->name = $_POST['name'];
		$this->passwd = $_POST['passwd'];

		$result = $this->db->insert('members', $this);
		return $result;
	}

}
