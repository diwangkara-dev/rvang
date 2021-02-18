<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role')!='1'){
            // echo '<script>alert("Bukan admin'.$halo.'");window.location.href="'.base_url().'";</script>';
            redirect('/');
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
       $this->output_crud((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

    public function role()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('role');
        $crud->set_subject('Roles');

        $crud->required_fields('roleName');
        $crud->required_fields('roleId');

        $output = $crud->render();

        $this->output_crud($output);
    }
    
    public function productCategory()
    {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('productCategory');
        $crud->set_subject('product category');

        $crud->required_fields('categoryName');

        $output = $crud->render();

        $this->output_crud($output);
    }
} 