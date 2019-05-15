<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// rotas site
$route['default_controller']    = 'home';
$route['sobre']                 = 'home/sobre';
$route['contato']               = 'home/contato';
$route['catalogo']              = 'catalogo';
$route['produto/(:num)']        = 'catalogo/produto/$1';
$route['termos']                = 'home/termos';

// rotas cliente
$route['login']                 = 'cliente/login';
$route['logout']                = 'cliente/login/logout';
$route['login/try']             = 'cliente/login/login';
$route['cadastro']              = 'cliente/login/cadastro';
$route['cadastrar']             = 'cliente/login/cadastrar';
$route['carrinho']              = 'cliente/compra/ver_carrinho';
$route['comprar/(:num)']        = 'cliente/compra/index/$1';
$route['excluir-item/(:num)']   = 'cliente/compra/excluir_item/$1';
$route['comprar/(:num)']        = 'cliente/compra/index/$1';
$route['cancelar']              = 'cliente/compra/cancelar_pedido';
$route['finalizar']             = 'cliente/compra/finalizar_pedido';
$route['perfil']                = 'cliente/perfil';
$route['pedidos']               = 'cliente/compra/pedidos';
$route['pedido/(:num)']         = 'cliente/compra/pedido/$1';

// rotas admin
$route['admin/login']           = 'admin/login';
$route['admin/login/try']       = 'admin/login/login';
$route['admin/logout']          = 'admin/login/logout';
$route['admin/produtos']        = 'admin/produtos/';
$route['admin/novo-produto']    = 'admin/produtos/novo';
$route['admin/usuarios']        = 'admin/usuarios/';
$route['admin/pedidos']         = 'admin/pedidos/';
$route['admin/relatorios']      = 'admin/relatorios/';