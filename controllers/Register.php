<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
// Code by: Ade Yudha Pratama
    class Register extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('auth_model');
        }
        public function index() {
            if($this->session->userdata('logged_in')) {
                redirect(base_url(), 'refresh'); // homepage representation
            } else {
                $this->load->view('register');
            }
        }
        public function register_process() {
            if($this->input->post('submit')) {
                $username = $this->input->post('username');
                $check_username = $this->auth_model->register_check($username);
                if($check_username == true) {
                    $this->auth_model->register_save();
                    redirect(base_url().'user', 'refresh');
                } else {
                    // need form validation to username is not avaible
                }
            } else {
                redirect(base_url().'register', refresh);
            }
        }
    }
?>