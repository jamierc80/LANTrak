<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function hosts()
	{
		$data['title'] = "Hosts";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_hosts');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$crud->set_relation("host_site","tbl_sites","site_description");
		$crud->set_relation("host_type","tbl_hosttypes","ht_description");
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);	
	}
	
	public function hostsite()
	{
		$data['title'] = "Hosts by Site";
		
		$site = $this->uri->segment(3);
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_hosts');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$crud->set_relation("host_site","tbl_sites","site_description");
		$crud->set_relation("host_type","tbl_hosttypes","ht_description");
		$crud->where("host_site",$site);
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);	
	}
	
	public function sites()
	{
		$data['title'] = "Sites";
		
		$crud = new grocery_CRUD();
		$crud->set_table('tbl_sites');
		$crud->set_theme('bootstrap');
		$crud->unset_jquery();
		$crud->unset_bootstrap();
		$crud->set_relation("site_country","tbl_countries","country_description");
		$crud->add_action('Hosts', '', 'main/hostsite','fa-search');
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);	
	}
	
}
