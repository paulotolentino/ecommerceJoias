<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {
    public function __construct(){
        parent::__construct();        
        $this->load->model('produtos_model', 'modelprodutos');
        $this->load->model('pedidos_model', 'modelpedidos');
        $this->load->model('historico_model', 'modelhistorico');
        is_logged();
    }
    

	public function index($id){

        $id_cliente = $this->session->userdata('uid_cliente');
        $pedido_id = $this->modelpedidos->busca_id_pedido_aberto($id_cliente);

        if($pedido_id == false) $pedido_id = $this->modelpedidos->novo_pedido($id_cliente);
        $this->modelpedidos->incluir_item($id, $pedido_id);

        header('Location:'.base_url('carrinho')); 
    }
    
    public function ver_carrinho(){

        $id_cliente = $this->session->userdata('uid_cliente');
        $pedido_id = $this->modelpedidos->busca_id_pedido_aberto($id_cliente);

        if($pedido_id == false) {
            $dados['produtos'] = false;
        }else{
            $dados['produtos'] = $this->modelpedidos->buscar_itens_pedido($pedido_id);
        }
        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
		$this->load->view('backend/cliente/carrinho');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }

    public function finalizar_pedido(){
        $id_cliente = $this->session->userdata('uid_cliente');
        $pedido_id = $this->modelpedidos->busca_id_pedido_aberto($id_cliente);

        $this->modelhistorico->adiciona_historico($id_cliente, $pedido_id);

        $this->modelpedidos->finaliza_pedido($pedido_id);
        $this->load->view('template/html-header');
		$this->load->view('template/header');
        $this->load->view('backend/cliente/sucesso');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
        
    }

    public function cancelar_pedido(){
        $id_cliente = $this->session->userdata('uid_cliente');
        $pedido_id = $this->modelpedidos->busca_id_pedido_aberto($id_cliente);

        $this->modelpedidos->cancelar_items($pedido_id);
        $this->modelpedidos->cancelar_pedido($pedido_id);

        redirect(base_url());        
    }

    public function excluir_item($produto_id){
        $id_cliente = $this->session->userdata('uid_cliente');
        $pedido_id = $this->modelpedidos->busca_id_pedido_aberto($id_cliente);
        
        if($pedido_id == false) {
            $dados['produtos'] = false;
        }else{
            $this->modelpedidos->cancelar_item($pedido_id, $produto_id);
        }

        header('Location:'.base_url('carrinho')); 
    }

    public function pedidos(){
        $this->load->model('usuarios_model', 'modelusuarios');
        $id_cliente = $this->session->userdata('uid_cliente');
        $dados['cliente'] = $this->modelusuarios->buscar_usuario(NULL, NULL, $id_cliente)->row();
        $dados['endereco'] = $this->modelusuarios->buscar_endereco($dados['cliente']->usuario_endereco);
        $dados['pedidos'] = $this->modelpedidos->busca_pedidos_fechados($id_cliente);
        $dados['perfil'] = true;

        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
        $this->load->view('backend/cliente/pedidos');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
    
    public function pedido($pedido_id){
        $this->load->model('usuarios_model', 'modelusuarios');
        $id_cliente = $this->session->userdata('uid_cliente');
        $dados['cliente'] = $this->modelusuarios->buscar_usuario(NULL, NULL, $id_cliente)->row();
        $dados['pedido'] = $this->modelpedidos->busca_pedido($pedido_id);
        $dados['produtos'] = $this->modelpedidos->buscar_itens_pedido($pedido_id);
        $dados['perfil'] = true;

        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
        $this->load->view('backend/cliente/pedido');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
	}

}