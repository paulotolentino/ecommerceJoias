<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('usuarios_model', 'modelusuarios');
    }
        
    // Página de Login
	public function index(){
		$this->load->view('backend/cliente/login');
	}

	// Verificação do Login
	public function login(){
		$email=$this->input->post('email');
		$senha=$this->input->post('senha');
		$userlogado = $this->modelusuarios->buscar_usuario($email, $senha, NULL);		
			
        if ($userlogado->num_rows() == 1) {
            $dadosSession['uid_cliente'] = $userlogado->row()->usuario_id;
            $this->session->set_userdata($dadosSession);
            echo '<script>window.location="'.base_url().'"</script>';
        }else{
            $dadosSession['uid_cliente'] = NULL;
            $this->session->set_userdata($dadosSession);
            echo '<script> alert("Erro Login");  window.location.href="'.base_url().'";</script>';
        }
	}

	// Logout
	public function logout(){
        $array_items = array('uid_cliente');
        $this->session->unset_userdata($array_items);        
		redirect(base_url());
    }

    public function cadastro(){
		$this->load->view('frontend/cadastro');
    }
    
    public function cadastrar(){
		$nome=$this->input->post('nome');
		$senha=$this->input->post('senha');
		$email=$this->input->post('email');
		$numero=$this->input->post('numero');
		$cep=$this->input->post('cep');
		$ddd1=$this->input->post('ddd1');
        $telefone1=$this->input->post('telefone1');
        $telefone1 = $ddd1.$telefone1;
        $tels = 1;
        if($this->input->post('ddd2') != NULL && $this->input->post('telefone2') != NULL ){
            $ddd2=$this->input->post('ddd2');
            $telefone2=$this->input->post('telefone2');
            $telefone2 = $ddd2.$telefone2;
            $tels = 2;
        }
        if($this->input->post('ddd3') != NULL  && $this->input->post('telefone3') != NULL ){
            $ddd3=$this->input->post('ddd3');
            $telefone3=$this->input->post('telefone3');
            $telefone3 = $ddd3.$telefone3;
            $tels = 3;
        }

        //criando o recurso cURL
        $cr = curl_init();
        
        //definindo a url de busca 
        curl_setopt($cr, CURLOPT_URL, "viacep.com.br/ws/$cep/json/");
        
        //definindo a url de busca 
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
        
        //definindo uma variável para receber o conteúdo da página...
        $retorno = curl_exec($cr);
        
        //fechando-o para liberação do sistema.
        curl_close($cr); //fechamos o recurso e liberamos o sistema...
        
        $endereco = json_decode($retorno);
        
        $rua = $endereco->logradouro;
        $bairro = $endereco->bairro;
        $cidade = $endereco->localidade;
        $estado = $endereco->uf;
        $pais = 'Brasil';
        
        $endereco = $this->modelusuarios->novo_endereco($numero, $rua, $bairro, $cidade, $estado, $pais, $cep);
        $usuario = $this->modelusuarios->novo_usuario($nome, $email, $senha, $endereco, false);
        switch($tels){
            case 3:
                $this->modelusuarios->novo_telefone($telefone3, $usuario);
            case 2:
                $this->modelusuarios->novo_telefone($telefone2, $usuario);
            default:
                $this->modelusuarios->novo_telefone($telefone1, $usuario);
        }
        echo '<script> alert("Cadastro Realizado");  window.location.href="'.base_url().'";</script>';
    }
}