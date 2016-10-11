<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "Login";
		$form = $this->input->post('login');
		if(isset($form)){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('login_model');
			$r = $this->login_model->user_check($email,$password);
			if($r===1)
			{
				$this->session->set_userdata('logged_in', 1);
				$this->session->set_userdata('user_role', 1);
				redirect('main/sites/', 'location');
			}
		}
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_login');
	}
	
	public function forgotten()
	{
		$data['title'] = "Forgotten Password";
		$d['email'] = "";
		$form = $this->input->post('forgotten');
		if(isset($form)){
			$email = $this->input->post('email');
			if($email === "") {
				$d['email'] = 1;
			}else{
				$this->load->model('login_model');
				$r = $this->login_model->get_password($email);
				$d['email'] = $email;
			}
			
			
		}
		
		
		$this->load->view('view_head');
		$this->load->view('view_navbar', $data);
		$this->load->view('view_forgotten', $d);
	}
	
	public function logout()
	{
		session_destroy();
		redirect('login/index', 'location');	
	}
}
