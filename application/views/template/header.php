<body>
	<div class="site-wrap">
		<header class="site-navbar" role="banner">
			<div class="site-navbar-top">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
							<!-- <form action="" class="site-block-top-search">
								<span class="icon icon-search2"></span>
								<input type="text" class="form-control border-0" placeholder="Pesquisar">
							</form> -->
						</div>
						<div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
							<a href="<?php echo base_url();?>" class="js-logo-clone"><img src="<?php echo base_url();?>assets/images/cm.png" width="80%"></a>
						</div>

						<div class="col-6 col-md-4 order-3 order-md-3 text-right">
							<div class="site-top-icons">
								<ul>
                                    <?php
                                    if($this->session->userdata('uid_cliente')!= NULL) {?>
                                    <li>
                                        <a href="<?php echo base_url('perfil/');?>">
                                            <span class="icon icon-person"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('logout/');?>">
                                            <span class="icon icon-lock_open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('carrinho/');?>" class="site-cart">
                                            <span class="icon icon-shopping_cart"></span>
                                            <!-- <span class="count">0</span> -->
                                        </a>
                                    </li>
                                    <?php
                                    }else{?>
                                    <li>
                                        <a href="<?php echo base_url('login/');?>">
                                            <span class="icon icon-lock"></span>
                                        </a>
                                    </li>
                                    <?php
                                    }?>
									<li class="d-inline-block d-md-none ml-md-0"><a href="#"
											class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="site-navigation text-right text-md-center" role="navigation">
				<div class="container">
					<ul class="site-menu js-clone-nav d-none d-md-block">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url('sobre/');?>">Sobre</a></li>
						<li><a href="<?php echo base_url('catalogo/');?>">Catalogo</a></li>
						<li><a href="<?php echo base_url('contato/');?>">Contato</a></li>
					</ul>
				</div>
            </nav>
            <?php
            if(isset($perfil) && $perfil != NULL){?>
            <nav class="site-navigation text-right text-md-center" role="navigation">
				<div class="container">
					<ul class="site-menu js-clone-nav d-none d-md-block">
						<li><a href="<?php echo base_url('perfil/');?>">Meus dados</a></li>
						<li><a href="<?php echo base_url('pedidos/');?>">Meus pedidos</a></li>
					</ul>
				</div>
            </nav>
            <?php
            }
            ?>
              
		</header>
