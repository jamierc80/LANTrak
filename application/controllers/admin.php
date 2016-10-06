<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->library('grocery_CRUD');
	}
		
	public function index()
	{
		$this->load->view('view_head');
		$this->load->view('view_navbar');
	}
	
	public function users()
	{
		$data['title'] = "Users";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_users');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);
	}
	
	public function countries()
	{
		$data['title'] = "Countries";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_countries');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);
	}
	
	public function hosttypes()
	{
		$data['title'] = "Host Types";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_hosttypes');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);
	}
}
