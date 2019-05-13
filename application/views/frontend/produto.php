<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="<?php echo base_url();?>">Home</a> <span class="mx-2 mb-0">/</span> <strong
					class="text-black"><?php echo $produto->produto_nome;?></strong></div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?php echo base_url('assets/'.$produto->produto_foto); ?>" alt="<?php echo $produto->produto_nome;?>" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2 class="text-black"><?php echo $produto->produto_nome;?></h2>
				<p><?php echo $produto->produto_descricao;?></p>
				<p><strong class="text-primary h4"><?php echo number_format($produto->produto_preco, 2, ',', '.');?></strong></p>
				<!-- <div class="mb-1 d-flex">
					<label for="option-sm" class="d-flex mr-3 mb-3">
						<span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
								id="option-sm" name="shop-sizes"></span> <span
							class="d-inline-block text-black">Small</span>
					</label>
					<label for="option-md" class="d-flex mr-3 mb-3">
						<span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
								id="option-md" name="shop-sizes"></span> <span
							class="d-inline-block text-black">Medium</span>
					</label>
					<label for="option-lg" class="d-flex mr-3 mb-3">
						<span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
								id="option-lg" name="shop-sizes"></span> <span
							class="d-inline-block text-black">Large</span>
					</label>
					<label for="option-xl" class="d-flex mr-3 mb-3">
						<span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
								id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra
							Large</span>
					</label>
				</div> -->
				<!-- <div class="mb-5">
					<div class="input-group mb-3" style="max-width: 120px;">
						<div class="input-group-prepend">
							<button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
						</div>
						<input type="text" class="form-control text-center" value="1" placeholder=""
							aria-label="Example text with button addon" aria-describedby="button-addon1">
						<div class="input-group-append">
							<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
						</div>
					</div>

                </div> -->
                <?php
                if($this->session->userdata('uid_cliente')!= NULL) {?>
				<p><a href="<?php echo base_url('comprar/'.$produto->produto_id);?>" class="buy-now btn btn-sm btn-primary">Adicionar o carrinho</a></p>
                <?php
                }else{?>
                <p><a href="<?php echo base_url('login/');?>" class="buy-now btn btn-sm btn-info">Faça login para comprar</a></p>
                <?php
                }?>
			</div>
		</div>
	</div>
</div>
