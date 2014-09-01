<?php

class Comment extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('comment_model');
	}

	function insert(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','title','required');
		$this->form_validation->set_rules('content','content','required');
		if($this->form_validation->run() === TRUE){
			$this->comment_model->insert_item();
			print 'Comment posts successfully.';
		}
	}

	function del($id){
		$result = $this->comment_model->del($id);
		if($result>0){
			print 'delete successfully.';
		}
	}

	function reply($id,$post_id){
		$this->load->helper('form');

		$data['title'] = 'Reply comment';

		$data['reply_to'] = $id;

		$data['post_id'] = $post_id;

		$this->load->view('header',$data);

		$this->load->view('comment_reply',$data);

		$this->load->view('footer');
		
	}
}
