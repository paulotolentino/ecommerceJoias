<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

    public function buscar_destaques(){
		
        $this->db->where('tb_produto.produto_destaque', 1);
			
		return $this->db->get('tb_produto')->result();
    }

    public function buscar_produtos($id){
		
        $this->db->where('tb_produto.produto_quantidade_atual >= 1');

        if($id != NULL) $this->db->where('tb_produto.produto_id', $id);
			
        $get = $this->db->get('tb_produto');
        
        if($id != NULL) return $get->row();
        return $get->result();
    }
}