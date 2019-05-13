<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	// Verificação de Login no banco
	public function buscar_usuario($email, $senha, $id){
		if($id != NULL){
			$this->db->where('tb_usuario.usuario_id', $id);
		}else{
			$this->db->where('tb_usuario.usuario_email', $email);
            $this->db->where('tb_usuario.usuario_senha', hash('sha256', $senha));
            // $this->db->where('tb_usuario.usuario_senha', $senha);
		}		
		return $this->db->get('tb_usuario');
    }
    
    public function novo_endereco($numero, $rua, $bairro, $cidade, $estado, $pais, $cep){
        $insert['endereco_numero'] = $numero;
        $insert['endereco_rua'] = $rua;
        $insert['endereco_bairro'] = $bairro;
        $insert['endereco_cidade'] = $cidade;
        $insert['endereco_estado'] = $estado;
        $insert['endereco_pais'] = $pais;
        $insert['endereco_cep'] = $cep;
        $this->db->insert('tb_endereco', $insert);
        
        return $this->db->insert_id();
    }

    public function novo_usuario($nome, $email, $senha, $endereco, $adm){
        $insert['usuario_nome'] = $nome;
        $insert['usuario_email'] = $email;
        $insert['usuario_senha'] = hash('sha256', $senha);
        $insert['usuario_endereco'] = $endereco;
        if($adm == false) $insert['usuario_tipo'] = 1;
        else $insert['usuario_tipo'] = 2;
        $this->db->insert('tb_usuario', $insert);
        
        return $this->db->insert_id();
    }

    public function novo_telefone($telefone, $usuario){
        $insert['telefone_numero'] = $telefone;
        $insert['telefone_usuario'] = $usuario;
        $this->db->insert('tb_telefone', $insert);
    }

    public function buscar_telefone($usuario_id){
        $this->db->where('telefone_usuario', $usuario_id);
				
		return $this->db->get('tb_telefone')->result();
    }

    public function buscar_endereco($endereco_id){
        $this->db->where('endereco_id', $endereco_id);
				
		return $this->db->get('tb_endereco')->row();
    }
}