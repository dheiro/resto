<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
//    session_start();
    class Logout extends CI_Controller {
        public function __construct() {
            parent::__construct();
//            $this->load->model('auth_model');
        }
        public function index() {
            $login_data = array(
                'username' => '',
                'role' => '',
                'logged_in' => false
            );
            $this->session->unset_userdata($login_data);
            $this->session->sess_destroy();
            redirect(base_url().'login', 'refresh');
        }
    }
?>