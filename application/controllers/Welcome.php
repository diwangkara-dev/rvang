<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('index');
		$this->load->view('template/foot');
	}
}
