<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	
	function user_check($email, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$count = $this->db->count_all_results();
		if($count === 1) {
			return $count;
		}else{
			return 0;
		}
	}
	
	function get_user($email)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result;
	}
	
}

?>