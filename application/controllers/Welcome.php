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
}
