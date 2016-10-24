<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_model extends CI_Model {
	
	function user_check_api($email, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$count = $this->db->count_all_results();
		if($count === 1) {
			return array('a' => 1);
		}else{
			return array('a' => 0);
		}
	}
	
	function get_sites()
	{
		$this->db->select('*');
		$this->db->from('tbl_sites');
		$this->db->join('tbl_countries','tbl_countries.country_id = tbl_sites.site_country');
		$result = $this->db->get();
		return $result;
	}
	
	function get_hosts()
	{
		$this->db->select('*');
		$this->db->from('tbl_hosts');
		$this->db->join('tbl_sites','tbl_sites.site_id = tbl_hosts.host_site');
		$this->db->join('tbl_hosttypes','tbl_hosttypes.ht_id = tbl_hosts.host_type');
		$result = $this->db->get();
		return $result;
	}
	
}

?>