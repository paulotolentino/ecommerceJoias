<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historico_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	// Verificação de Login no banco
	public function adiciona_historico($id_cliente, $pedido_id){
        $insert['historico_usuario'] = $id_cliente;
        $insert['historico_pedido'] = $pedido_id;	
		$this->db->insert('tb_historico', $insert);
	}
}