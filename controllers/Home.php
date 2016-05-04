<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
// Code by: Ade Yudha Pratama
    class Home extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('dashboard_model');
        }
        public function index() {
            $data['meja'] = $this->dashboard_model->home();
            $this->load->view('home', $data);
//            echo '<pre>';
//            print_r($data['meja']);
        }
        public function menu_list() {
            $data['menu'] = $this->dashboard_model->get_menu();
            if($menu) {
                return true;
            } else {
                return false;
            }
            $this->load->view('home', $data);
        }
    }
?>