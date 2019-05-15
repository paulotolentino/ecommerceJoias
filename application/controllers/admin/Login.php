<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model', 'modelusuarios');
    }
        
    // Página de Login
	public function index(){
		$this->load->view('backend/admin/login');
	}

	// Verificação do Login
	public function login(){
		$email=$this->input->post('email');
		$senha=$this->input->post('senha');
		$userlogado = $this->modelusuarios->buscar_usuario($email, $senha, NULL);		
			
        if ($userlogado->num_rows() == 1) {
            if($userlogado->row()->usuario_tipo == 1){
                echo '<script> alert("Você não tem acesso à essa área");  window.location.href="'.base_url().'";</script>';
		        redirect(base_url());
            }
            $dadosSession['uid_admin'] = $userlogado->row()->usuario_id;
            $this->session->set_userdata($dadosSession);
            echo '<script>window.location="'.base_url('admin').'"</script>';
        }else{
            $dadosSession['uid_admin'] = NULL;
            $this->session->set_userdata($dadosSession);
            echo '<script> alert("Erro Login");  window.location.href="'.base_url('admin').'";</script>';
        }
	}

	// Logout
	public function logout(){
        $array_items = array('uid_admin');
        $this->session->unset_userdata($array_items);
		redirect(base_url());
    }
}