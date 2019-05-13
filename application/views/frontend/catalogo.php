<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="<?php echo base_url();?>">Home</a> <span class="mx-2 mb-0">/</span> <strong
					class="text-black">Catalogo</strong></div>
		</div>
	</div>
</div>
<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-9 order-2">
				<div class="row">
					<div class="col-md-12 mb-5">
						<div class="float-md-left mb-4">
							<h2 class="text-black h5">Catalogo completo</h2>
						</div>						
					</div>
				</div>
				<div class="row mb-5">
                <?php foreach($produtos as $produto){?>
                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
						<div class="block-4 text-center border">
							<figure class="block-4-image">
                                <a href="<?php echo base_url('produto/'.$produto->produto_id) ?>">
                                    <img src="<?php echo base_url('assets/'.$produto->produto_foto); ?>" style="height: 250px; width:250px"  alt="<?php echo $produto->produto_nome;?>"
                                        class="img-fluid">
                                </a>
							</figure>
							<div class="block-4-text p-4">
								<h3><a href="<?php echo base_url('produto/'.$produto->produto_id) ?>"><?php echo $produto->produto_nome;?></a></h3>
								<p class="mb-0"><?php echo $produto->produto_descricao;?></p>
								<p class="text-primary font-weight-bold"><?php echo number_format($produto->produto_preco, 2, ',', '.');?></p>
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