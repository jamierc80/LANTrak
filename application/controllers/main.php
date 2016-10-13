<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->library('grocery_CRUD');
		if($this->session->userdata('logged_in')!=1) { redirect('login/index','location'); };
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
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
		$crud->display_as("host_hostname","Hostname");
		$crud->display_as("host_ip","IP");
		$crud->display_as("host_type","Host Type");
		$crud->display_as("host_comments","Comments");
		$crud->display_as("host_enabled","Enabled");
		$crud->display_as("host_site","Site");
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
		$crud->display_as("host_hostname","Hostname");
		$crud->display_as("host_ip","IP");
		$crud->display_as("host_type","Host Type");
		$crud->display_as("host_comments","Comments");
		$crud->display_as("host_enabled","Enabled");
		$crud->display_as("host_site","Site");
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
		$crud->display_as("site_code","Code");
		$crud->display_as("site_description","Description");
		$crud->display_as("site_subnet","Subnet");
		$crud->display_as("site_gateway","Gateway");
		$crud->display_as("site_country","Country");
		$output = $crud->render();
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_gc', $output);	
	}
	
}