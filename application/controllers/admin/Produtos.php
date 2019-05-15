<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function __construct(){
        parent::__construct();
        is_admin();
        $this->load->model('produtos_model', 'modelprodutos');
    }
    
	public function index(){
        $id_admin = $this->session->userdata('uid_admin');
        $dados=[];
        //$dados['admin'] = $this->modelusuarios->buscar_usuario(NULL, NULL, $id_admin)->row();
        $dados['produtos'] = $this->modelprodutos->buscar_produtos(NULL);
        $this->load->view('template/html-header', $dados);
		$this->load->view('template/admin-header');
        $this->load->view('backend/admin/produtos');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
}