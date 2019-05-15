<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model', 'modelusuarios');
        is_logged();
    }
		// Página de Login
	public function index(){
        $id_cliente = $this->session->userdata('uid_cliente');
        $dados['cliente'] = $this->modelusuarios->buscar_usuario(NULL, NULL, $id_cliente)->row();
        $dados['telefones'] = $this->modelusuarios->buscar_telefone($id_cliente);
        $dados['endereco'] = $this->modelusuarios->buscar_endereco($dados['cliente']->usuario_endereco);
        $dados['perfil'] = true;

        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
        $this->load->view('backend/cliente/perfil');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
}