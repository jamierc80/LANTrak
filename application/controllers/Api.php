<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct()
	{
        parent::__construct();
	}
	
	public function api_check()
	{
		$data['result'] = array('a' => 1);	
		$this->load->view('view_apiraw', $data);
	}
	
	public function user_check()
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		
		$this->load->model('login_model');
		$r = $this->login_model->user_check_api($email,$password);
		$data['result'] = $r;
		
		$this->load->view('view_apiraw', $data);
	}
	
	public function get_hosts()
	{
		$this->load->model('api_model');
		$data['result'] = $this->api_model->get_hosts();
		$this->load->view('view_api', $data);
	}
	
	public function get_sites()
	{
		$this->load->model('api_model');
		$data['result'] = $this->api_model->get_sites();
		$this->load->view('view_api', $data);
	}

}