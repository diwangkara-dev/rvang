<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
    }

    public function index()
    {
        if($cek_login->roleId != '1'){
            echo '<script>window.location.href="'.base_url().'";</script>';
        }
        
        echo $this->session->userdata('userId');
        echo $this->session->userdata('firstName');

        $this->load->view("dashboard/index");
    }

} 