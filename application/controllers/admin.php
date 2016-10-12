<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->library('grocery_CRUD');
		if($this->session->userdata('user_role')!="1") { redirect('main/sites','location'); };
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
		$crud->set_relation("user_role","tbl_roles","role_description");
		$crud->display_as("user_role","Role");
		$crud->display_as("user_email","Email");
		$crud->display_as("user_password","Password");
		$crud->display_as("user_username","Username");
		$crud->field_type("user_password", "password");
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);
	}
	
	public function roles()
	{
		$data['title'] = "Roles";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_roles');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$crud->display_as("role_description","Description");
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
		$crud->display_as("country_description","Description");
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
		$crud->display_as("ht_description","Description");
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);
	}
}
