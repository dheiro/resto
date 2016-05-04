<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
// Code by: Ade Yudha Pratama
    class Auth_Model extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
        public function login_check($username, $password) {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get();
            if($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return false;
            }
        }
        public function register_check($username) {
            $this->db->select('username');
            $this->db->from('user');
            $this->db->where('username', $username);
            $query = $this->db->get();
            if($query->num_rows() > 0) {
                return false;
            } else {
                return true;
            }
        }
        public function register_save() {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password2'));
            $nama_lengkap = $this->input->post('nama-lengkap');
            $jabatan = $this->input->post('jabatan');
            $data = array(
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $nama_lengkap,
                'jabatan' => $jabatan
            );
            $this->db->insert('user', $data);
        }
    }
?>