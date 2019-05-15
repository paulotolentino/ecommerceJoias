<div class="site-section">
	<div class="container">
        <?php
        if($produtos != false){?>
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="product-thumbnail">Imagem</th>
								<th class="product-code">Codigo do produto</th>
								<th class="product-name">Nome do produto</th>
								<th class="product-description">Descricao do produto</th>
								<th class="product-price">Preço</th>
								<th class="product-quantity">Quantidade em estoque</th>
								<th class="product-cancel">Ação</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                        $preco = 0;
                        foreach($produtos as $produto){?>
							<tr>
								<td class="product-thumbnail">
									<img src="<?php echo base_url('assets/'.$produto->produto_foto); ?>" alt="Image" class="img-fluid"
										style="height: 150px;">
								</td>
								<td class="product-code">
									<h2 class="h5 text-black"><?php echo $produto->produto_id; ?></h2>
								</td>
								<td><input class="form-control text-center" value="<?php echo $produto->produto_nome; ?>"></td>
								<td><textarea><?php echo $produto->produto_descricao; ?></textarea></td>
								<td><input class="form-control text-center" value="<?php echo $produto->produto_preco; ?>"></td>
								<td>
									<div class="input-group mb-3" style="max-width: 120px;">
										<div class="input-group-prepend">
										</div>
										<input type="text" class="form-control text-center" value="<?php echo $produto->produto_quantidade_atual; ?>" placeholder=""
											aria-label="Example text with button addon"
											aria-describedby="button-addon1">
										<div class="input-group-append">
										</div>
								</td>
								<td>
                                    <div class="row">
                                        <a href="#" class="btn btn-primary btn-sm col-md-12 mb-3">Alterar</a>
                                    </div>
                                    <div class="row">
                                        <a href="#" class="btn btn-primary btn-sm col-md-12">Excluir</a>
                                    </div>
                                </td>
                            </tr>                            
                            <?php
                            }?>
						</tbody>
					</table>
				</div>
			</form>
        </div>
        <?php
        }else{?>
        <div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
                        <?php                        
                        echo "Nenhum produto cadastrado";?>
                        <a class="btn btn-primary btn-sm btn-block" href="<?php echo base_url('admin/novo-produto')?>">
                            Cadastrar Produtos
                        </a>
					</div>
				</div>
            </div>
        <?php
        }
        ?>
	</div>
</div>