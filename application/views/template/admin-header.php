<body>
 	<div class="site-wrap">
 		<header class="site-navbar" role="banner">
 			<div class="site-navbar-top">
 				<div class="container">
 					<div class="row align-items-center">
 						<div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                            <a href="<?php echo base_url('admin/');?>" class="js-logo-clone">
                                <img src="<?php echo base_url();?>/assetsimages/cm.png" width="80%">
                            </a>
 						</div>
 					</div>
 				</div>
 			</div>
 			<nav class="site-navigation text-right text-md-center" role="navigation">
 				<div class="container">
 					<ul class="site-menu js-clone-nav d-none d-md-block">
 						<li><a href="<?php echo base_url('admin/');?>">Tela inicial</a></li>
 						<li><a href="<?php echo base_url('admin/novo-produto/');?>cadastrarProdutoAdmin.html">Cadastrar produtos</a></li>
 						<li><a href="<?php echo base_url('admin/produtos/');?>atualizarExcluirAdminProduto.html">Atualizar / Excluir produtos</a></li>
 						<li><a href="<?php echo base_url('admin/usuarios/');?>consultarAtualizarUsuariosAdmin.html">Consultar / Atualizar usuarios</a></li>
 						<li><a href="<?php echo base_url('admin/pedidos/');?>consultarAtualizarPedidosStatusAdmin.html">Consultar / atualizar pedidos e
 								status</a></li>
 						<li><a href="<?php echo base_url('admin/relatorios');?>">Relatorios</a></li>
 					</ul>
 				</div>
 			</nav>
 		</header>