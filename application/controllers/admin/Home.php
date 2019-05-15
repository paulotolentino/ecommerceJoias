<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        is_admin();
        $this->load->model('usuarios_model', 'modelusuarios');
    }
    
	public function index(){
        $id_admin = $this->session->userdata('uid_admin');
        $dados['admin'] = $this->modelusuarios->buscar_usuario(NULL, NULL, $id_admin)->row();
        $this->load->view('template/html-header', $dados);
		$this->load->view('template/admin-header');
        $this->load->view('backend/admin/home');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
}