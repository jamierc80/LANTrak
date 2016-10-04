<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function users()
	{
		$this->load->view('welcome_message');
	}
	
	public function countries()
	{
		$this->load->view('welcome_message');
	}
	
	public function hosttypes()
	{
		$this->load->view('welcome_message');
	}
}
