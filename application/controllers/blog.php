<?php

class Blog extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	function login(){
		if(isset($_POST['name']) && isset($_POST['passwd'])){
			// if the user has just try to log in
			$this->load->model('member');
			$result = $this->member->login();
			if($result){
				$this->session->set_userdata($result);
				redirect('blog');
			}
		}else{
			$this->load->view('login');
		}
	}

	function register(){
		if(isset($_POST['name']) && isset($_POST['passwd'])){
			$this->load->model('member');
			$result = $this->member->register();
			redirect('blog/login');
		}else{
			$this->load->view('register');
		}
	}

	function index(){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{
			$data['title'] = 'My Blog Title';
			$data['heading'] = 'My Blog Heading';

			$data['query'] = $this->blog_model->get_entries();

			$this->load->view('blog_view',$data);
		}
	}

	function write(){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('body','boby','required');
			if($this->form_validation->run() === TRUE){
				$this->blog_model->insert_entry();
				$this->load->view('post_success');
			}else{
				$this->load->view('post_write');
			}
		}
	}

	function del($id){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{

			$result = $this->blog_model->del($id);

			if($result>0){
				$this->load->view('post_delete');
			}
		}
	}

	function post($id){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{

			$data = $this->blog_model->get_onepost($id);

			$this->load->model('comment_model');
			
			$data['comments'] = $this->comment_model->get_comments($id);

			$this->load->view('post_view',$data);
		}
	}

	function edit($id){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{
		
			$data = $this->blog_model->get_onepost($id);

			$this->load->view('edit_view',$data);
		}
	}

	function update(){
		if(empty($this->session->userdata['id'])){
			$this->load->view('login');
		}else{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('body','boby','required');
			if($this->form_validation->run() === TRUE){
				$this->blog_model->update_entry();
				redirect('blog/post/'.$_POST['id']);
			}
		}
	}

}
