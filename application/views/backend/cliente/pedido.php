<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Pedido</strong>
            </div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
        <?php
        if($pedido != false){?>
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
                    <table class="table table-bordered">
						<thead>
							<tr>
								<th class="product-thumbnail">Imagem</th>
								<th class="product-name">Produto</th>
								<th class="product-price">Preço</th>
								<th class="product-quantity">Quantidade</th>
								<th class="product-total">Total</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        $preco = 0;
                        foreach($produtos as $produto){?>
                            <tr>
								<td class="product-thumbnail">
									<img src="<?php echo base_url('assets/'.$produto->produto_foto); ?>" alt="<?php echo $produto->produto_nome;?>" class="img-fluid"
										style="height: 150px;">
								</td>
								<td class="product-name">
									<h2 class="h5 text-black"><?php echo $produto->produto_nome;?></h2>
								</td>
								<td>
                                <?php
                                echo number_format($produto->produto_preco, 2, ',', '.');
                                $preco += $produto->produto_preco * $produto->item_quantidade;
                                ?>
                                </td>
								<td>
									<div class="input-group mb-3" style="max-width: 120px;">
										<div class="input-group-prepend">

										</div>
										<input type="text" readonly class="form-control text-center" value="<?php echo $produto->item_quantidade;?>" placeholder=""
											aria-label="Example text with button addon"
											aria-describedby="button-addon1">
										<div class="input-group-append">

										</div>
									</div>
								</td>
								<td><?php echo number_format($produto->produto_preco, 2, ',', '.');?></td>
							</tr>
                            <?php
                            }?>
						</tbody>
					</table>
				</div>
			</form>
        </div>
        <div class="row">
			<div class="col-md-6">				
			</div>
			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Total do Pedido</h3>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-md-6">
								<span class="text-black">Total</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black"><?php echo number_format($preco, 2, ',', '.');?></strong>
							</div>
						</div>

						<div class="row">
                            <div class="col-md-12">
                                <a href="#" onClick="history.go(-1)">
                                    <h5>
                                        < Voltar
                                    </h5>
                                </a>
                            </div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <?php
        }else{?>
            <div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
                        <?php                        
                        echo "Seu pedido está vazio";?>
                        <a class="btn btn-primary btn-sm btn-block" href="<?php echo base_url('catalogo/')?>">
                            Continuar comprando
                        </a>
					</div>
				</div>
            </div>
        <?php
        }
        ?>
	</div>
</div>