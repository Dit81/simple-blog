<?php

class Member extends CI_Model{

	private $id = '';
	private $name = '';
	private $passwd = '';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function login(){
		$query = $this->db->get_where('members',array('name'=>$_POST['name'],'passwd'=>$_post['passwd']));
		return $query->row_array();
	}

	function register(){
		$this->name = $_POST['name'];
		$this->passwd = $_POST['passwd'];

		$result = $this->db->insert('members', $this);
		return $result;
	}

}
