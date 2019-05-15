<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('clientes_model', 'modelclientes');
        is_logged();
    }
		// Página de Login
	public function index(){
        $id_cliente = $this->session->userdata('uid_cliente');
        $dados['cliente'] = $this->modelclientes->buscar_usuario(NULL, NULL, $id_cliente)->row();
        $dados['telefones'] = $this->modelclientes->buscar_telefone($id_cliente);
        $dados['endereco'] = $this->modelclientes->buscar_endereco($dados['cliente']->usuario_endereco);
        $dados['perfil'] = true;

        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
        $this->load->view('backend/cliente/perfil');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }

	// Verificação do Login
	public function login(){
		$email=$this->input->post('email');
		$senha=$this->input->post('senha');
		$userlogado = $this->modelclientes->buscar_usuario($email, $senha, NULL);		
			
        if ($userlogado->num_rows() == 1) {
            $dadosSession['uid_cliente'] = $userlogado->row()->usuario_id;
            $this->session->set_userdata($dadosSession);
            echo '<script>window.location="'.base_url().'"</script>';
        }else{
            $dadosSession['uid_cliente'] = NULL;
            $this->session->set_userdata($dadosSession);
            echo '<script> alert("Erro Login")</script>';
        }
	}

	// Logout
	public function logout(){
        $array_items = array('uid_cliente');
        $this->session->unset_userdata($array_items);        
		redirect(base_url());
    }
}