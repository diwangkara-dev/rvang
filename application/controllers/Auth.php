<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function proses_login()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
    
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/welcome/login'); // LOGIN
        
        } else {
    
            $email = htmlspecialchars($this->input->post('email'));
            $pass = htmlspecialchars($this->input->post('password'));
    
            // CEK KE DATABASE BERDASARKAN EMAIL
            $cek_login = $this->auth_model->cek_login($email); 
                
            if($cek_login == FALSE)
            {
                echo '<script>alert("Username yang Anda masukan salah.");window.location.href="'.base_url('/welcome/login').'";</script>';
            
            } else {
            
                if(password_verify($pass, $cek_login->password)){
                    // if the username and password is a match
                    $this->session->set_userdata('userId', $cek_login->id);
                    $this->session->set_userdata('emailx', $cek_login->username);
                    $this->session->set_userdata('firstName', $cek_login->name);
                    
                    redirect('/dashboard');
                        
                } else {
                    echo '<script>alert("Username atau Password yang Anda masukan salah.");window.location.href="'.base_url('/index.php/auth/login').'";</script>';
                }
            }
        }
    }

    public function proses_register()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
    
        $this->form_validation->set_rules('firstName', 'firstName', 'required');
        $this->form_validation->set_rules('lastName', 'lastName', 'required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $errors = $this->form_validation->error_array();
            $this->session->set_flashdata('errors', $errors);
            $this->session->set_flashdata('input', $this->input->post());
            redirect('/welcome/sign_up');
        } else {
            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'email' => $email,
                'password' => $pass,
                'firstName' => $firstName,
                'lastName' => $lasttName,
                'roleId' => "2"
            ];
            $insert = $this->auth_model->register("user", $data);
            if($insert){
                echo '<script>alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");window.location.href="'.base_url('index.php/auth/login').'";</script>';
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo 'alert("Sukses! Anda berhasil logout."); window.location.href="'.base_url('/welcome/sign_up').'";';
    }
} 