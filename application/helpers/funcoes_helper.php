<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    function limpar($string){
        $table = array(
            '/'=>'', '('=>'', ')'=>'',
        );
        // Traduz os caracteres em $string, baseado no vetor $table
        $string = strtr($string, $table);
        $string= preg_replace('/[,.;:`´^~\'"]/', null, iconv('UTF-8','ASCII//TRANSLIT',$string));
        $string= strtolower($string);
        $string= str_replace(" ", "-", $string);
        $string= str_replace("---", "-", $string);
        return $string;
    }

    function data($string){
        $data = strtotime($string);
        $dia = date('d', $data);
        $mes_num = date('m', $data);
        switch ($mes_num) {
            case 1:
                $mes = 'Janeiro';
                break;

            case 2:
                $mes = 'Fevereiro';
                break;

            case 3:
                $mes = 'Março';
                break;

            case 4:
                $mes = 'Abril';
                break;

            case 5:
                $mes = 'Maio';
                break;

            case 6:
                $mes = 'Junho';
                break;
            
            case 7:
                $mes = 'Julho';
                break;
            
            case 8:
                $mes = 'Agosto';
                break;
            
            case 9:
                $mes = 'Setembro';
                break;
            
            case 10:
                $mes = 'Outubro';
                break;
            
            case 11:
                $mes = 'Novembro';
                break;
            
            default:
                $mes = 'Dezembro';
                break;
        }
        $ano = date('Y', $data);
        return $dia.' de '.$mes.' de '.$ano;
    }

    function data_simples($string){
        $data = strtotime($string);
        $dia = date('d', $data);
        $mes = date('m', $data);
        $ano = date('Y', $data);
        return $dia.'/'.$mes.'/'.$ano;
    }

    function data_hora_simples($string){
        $data = strtotime($string);
        $dia = date('d', $data);
        $mes = date('m', $data);
        $ano = date('Y', $data);
        $hora = date('H', $data);
        $min = date('i', $data);
        $sec = date('s', $data);
        return $dia.'/'.$mes.'/'.$ano.' às '.$hora.':'.$min.':'.$sec;
    }

    function is_logged() {
        $_this = & get_instance();
        if (!$_this->session->has_userdata('uid_cliente')) {
            redirect(base_url('login'));
            exit;
        }
    }

    function is_admin(){
        $_this = & get_instance();
        if (!$_this->session->has_userdata('uid_admin')) {
            redirect(base_url('admin/login'));
            exit;
        }
    }

    function InformacoesUsuario($coluna, $id_user = false) {
        $_this = & get_instance();	
        if ($id_user === false) {	
            $id_user = $_this->session->userdata('uid_cliente');
        }	
        $_this->db->where('usuario_id', $id_user);
        $usuario = $_this->db->get('tb_usuario');	
        if ($usuario->num_rows() > 0) {	
            return $usuario->row()->$coluna;
        }	
        return false;
    }