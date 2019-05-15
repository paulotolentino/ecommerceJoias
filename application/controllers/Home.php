<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();        
        $this->load->model('produtos_model', 'modelprodutos');
    }    

	public function index(){        
        $dados['destaques'] = $this->modelprodutos->buscar_destaques();
		$this->load->view('template/html-header', $dados);
		$this->load->view('template/header');
		$this->load->view('frontend/home');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
    
    public function sobre(){
        $this->load->view('template/html-header');
		$this->load->view('template/header');
		$this->load->view('frontend/sobre');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }

    public function contato(){
        $this->load->view('template/html-header');
		$this->load->view('template/header');
		$this->load->view('frontend/contato');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }

    public function termos(){
        $this->load->view('template/html-header');
		$this->load->view('template/header');
		$this->load->view('frontend/termos');
		$this->load->view('template/footer');
		$this->load->view('template/html-footer');
    }
}
