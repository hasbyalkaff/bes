<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $username = "admin";
	private $password = "123";

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login(){
		$this->load->view('template');
	}

	public function doLogin(){
		$input = $this->input->post();
		if($input['username']);
	}
}