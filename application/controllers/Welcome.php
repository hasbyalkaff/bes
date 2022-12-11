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
		$this->load->view('login');
	}

	public function home(){
		$this->load->view('home');
	}

	public function dashboard(){
		$this->view('dashboard');
	}

	private function view($content, $data=null){
		$component = array(
			"__sidenav" => $this->load->view("__template/__sidenav", null, true),
			"__content" => $this->load->view($content, $data, true)
		);
		$this->load->view("__template/__template", $component);
	}
}
