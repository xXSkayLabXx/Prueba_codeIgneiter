<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
    $this->load->database();  
    $query = $this->db->get('Usuarios');
    var_dump($query->result());
    }
    public function index()
    {
        $data['menu'] = main_menu();
        $this->load->view('registro',$data);
    }

    public function create(){
       $username = $this->input->post('username');
       $email = $this->input->post('email');
       $password = $this->input->post('password');
       $password_c = $this->input->post('password_confirm');
    }
}