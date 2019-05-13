<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function busca_id_pedido_aberto($id_cliente){
		
        $this->db->where('tb_pedido.pedido_usuario', $id_cliente);
        $this->db->where('tb_pedido.pedido_status', 9);
        $get =  $this->db->get('tb_pedido');
        if($get->num_rows() == 1) return $get->row()->pedido_id;
        return false;
		
    }
    
    public function novo_pedido($id_cliente){
        $insert['pedido_data'] = date('Y-m-d H:i:s');
        $insert['pedido_usuario'] = $id_cliente;
        $insert['pedido_status'] = 9;
        $this->db->insert('tb_pedido', $insert);
        return $this->db->insert_id();
    }

    public function incluir_item($prod_id, $pedido_id){
        $insert['item_quantidade'] = 1;
        $insert['item_produto'] = $prod_id;
        $insert['item_pedido'] = $pedido_id;
        $this->db->insert('tb_item', $insert);
    }

    public function buscar_itens_pedido($pedido_id){
        $this->db->from('tb_item');
        $this->db->join('tb_produto', 'tb_item.item_produto = tb_produto.produto_id');
        $this->db->where('tb_item.item_pedido', $pedido_id);
        return $this->db->get()->result();
    }

    public function cancelar_items($pedido_id){
        $this->db->where('item_pedido', $pedido_id);
        $this->db->delete('tb_item');
    }

    public function cancelar_pedido($pedido_id){
        $this->db->where('pedido_id', $pedido_id);
        $this->db->delete('tb_pedido');
    }

    public function finaliza_pedido($pedido_id){
        $update['pedido_status'] = 7;
        $this->db->update('tb_pedido', $update);
    }

    public function cancelar_item($pedido_id, $produto_id){
        $this->db->where('item_pedido', $pedido_id);
        $this->db->where('item_produto', $produto_id);
        $this->db->delete('tb_item');
    }
}