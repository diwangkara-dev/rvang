<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $halo = $this->cek_login();

        if($cek_login->roleId != '1'){
            echo '<script>alert("Bukan admin'.$halo.'");window.location.href="'.base_url().'";</script>';
            // redirect('/');
        }

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
    }

    public function output_crud($output = null)
	{
		$this->load->view('dashboard/index.php',(array)$output);
	}

    public function index()
    {
        echo $this->session->userdata('userId');
        echo $this->session->userdata('firstName');

        $this->load->view("dashboard/index");
    }

    public function role()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('role');
        $crud->set_subject('Roles');

        $crud->required_fields('roleName');

        $output = $crud->render();

        $this->output_crud($output);
    }
} 