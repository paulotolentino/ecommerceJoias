        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="site-blocks-cover" style="background-image: url(<?php echo base_url();?>assets/images/joia.png);" data-aos="fade">
				<div class="container">
					<div class="row align-items-start align-items-md-center justify-content-end">
						<div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
							<h1 class="mb-2">Bem-Vindo(a)!</h1>
							<div class="intro-text text-center text-md-left">
								<p class="mb-4">Confira a nova coleção! </p>
								<p>
									<a href="<?php echo base_url('catalogo') ?>" class="btn btn-sm btn-primary">Compre aqui</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-section block-3 site-blocks-2 bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 site-section-heading text-center pt-4">
					<h2>Destaques</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="nonloop-block-3 owl-carousel">
                    <?php foreach($destaques as $destaque){?>
                        <div class="item">
							<div class="block-4 text-center">
								<figure class="block-4-image">
                                    <a href="<?php echo base_url('produto/'.$destaque->produto_id) ?>">
                                        <img src="<?php echo base_url('assets/'.$destaque->produto_foto); ?>" alt="Destaque" class="img-fluid"
                                        style="height: 360px;">
                                    </a>
								</figure>
								<div class="block-4-text p-4">
									<h3><a href="#"><?php echo $destaque->produto_nome?> </a></h3>
									<p class="mb-0"></p>
									<p class="text-primary font-weight-bold"><?php echo  number_format($destaque->produto_preco, 2, ',', '.');?></p>
								</div>
							</div>
						</div>
                    <?php
                    }?>
					</div>
				</div>
			</div>
		</div>
	</div>




<!-- 
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
    <h1>Home</h1>
    <a href="<?php echo base_url('home/')?>">Home</a>
    <a href="<?php echo base_url('catalogo/')?>">Catálogo</a>
    <?php
    if($this->session->userdata('uid_cliente')!= NULL) {?>
        <a href="<?php echo base_url('carrinho/');?>">Carrinho</a>
        <a href="<?php echo base_url('perfil/');?>">Meu Perfil</a>
        <a href="<?php echo base_url('logout/');?>">Logout</a>
    <?php
    }else{?>
        <a href="<?php echo base_url('login/')?>">Login</a>
    <?php
    }?>
    <br>
    <?php foreach($destaques as $destaque){?>
        Carrosel: <a href="<?php echo base_url('produto/'.$destaque->produto_id) ?>"><img src="<?php echo base_url('assets/'.$destaque->produto_foto); ?>" alt="Detaque"></a>
    <?php
    }?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->