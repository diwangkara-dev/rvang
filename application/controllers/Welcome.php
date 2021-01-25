<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('index');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function about_us()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('about');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function blog()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('blog');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function live_plant()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('live_plant');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function interior_product()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('interior_product');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function article()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('article');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function login()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('login');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function sign_up()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('sign_up');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function product_detail()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('product_detail');
		$this->load->view('template/subscription');
		$this->load->view('template/modal');
		$this->load->view('template/foot');
	}

	public function forgot_password()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('forgot_password');
		$this->load->view('template/foot');
	}
}
