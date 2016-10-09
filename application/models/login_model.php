<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	
	function user_check($email, $password)
	{
		return 1;
	}
	
	function get_password($email)
	{
		$r = 'Password1';
		return $r;
	}
	
}

?>