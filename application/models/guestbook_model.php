<?php

class Guestbook_model extends CI_Model {
	
	function __construct() {
		parent::__construct();

		//Initialize database
		$this->load->database();
	}

	public function get_posts() {
		return $this->db->get('posts')->result_array();
	}

	public function insert_post() {
		$this->text = $this->input->post('text', true);
		$this->author = $this->input->post('author', true);

		return $this->db->insert('posts', $this);
	}
}