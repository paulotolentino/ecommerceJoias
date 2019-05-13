<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogo extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('produtos_model', 'modelprodutos');
	}
    
    public function index()
	{        
        $dados['produtos'] = $this->modelprodutos->buscar_produtos(NULL);
        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
		$this->load->view('frontend/catalogo');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
    
    public function produto($id)
	{        
        $dados['produto'] = $this->modelprodutos->buscar_produtos($id);
        $this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
		$this->load->view('frontend/produto');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
	}
}
