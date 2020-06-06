<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('page/web_header');
		$this->load->view('web_home');
		$this->load->view('page/web_footer');
	}
}
