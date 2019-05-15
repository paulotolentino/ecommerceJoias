<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Pedidos</strong>
            </div>
		</div>
	</div>
</div>

<div class="site-section">
    <div class="container">
        <?php
        if($pedidos != false){?>
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- <th class="product-thumbnail">Imagem</th> -->
                                <th class="product-code">Codigo do pedido</th>
                                <th class="product-date">Data de compra</th>
                                <th class="product-address">Endereco de entrega</th>
                                <th class="product-status">Status</th>
                                <th class="product-price">Detalhes</th>
                                <!-- <th class="product-payment">Forma de pagamento</th>
                                <th class="product-cancel">Cancelar pedido</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pedidos as $pedido){ ?>
                            <tr>
                                <!-- <td class="product-thumbnail">
                                    <img src="images/bracelete1.jpg" alt="Image" class="img-fluid"
                                        style="height: 150px;">
                                </td> -->                                
                                <td class="product-code">
                                    <h2 class="h5 text-black"><?php echo $pedido->pedido_id;?></h2>
                                </td>
                                <td><?php echo data_simples($pedido->pedido_data);?></td>
                                <td><?php echo $endereco->endereco_rua.', '.$endereco->endereco_numero.' - '.$endereco->endereco_bairro.' - '.$endereco->endereco_cidade.' - '.$endereco->endereco_estado.' - '.$endereco->endereco_cep;?></td>
                                <td><?php
                                    switch($pedido->pedido_status){
                                        case 1:
                                            echo "Pedido em Aberto";
                                            break;
                                        case 2:
                                            echo "Pedido Efetuado";
                                            break;
                                        case 3:
                                            echo "Aguardando Confirmação de Pagamento";
                                            break;
                                        case 4:
                                            echo "Pagamento Confirmado";
                                            break;
                                        case 5:
                                            echo "Preparação do Pedido";
                                            break;
                                        case 6:
                                            echo "Pedido em Transporte";
                                            break;
                                        case 7:
                                            echo "Pedido Entregue";
                                            break;
                                        default:
                                            echo "Erro status";
                                    }
                                
                                ?></td>
                                <!-- <td>49,99</td> -->
                                <!-- <td>Transferencia bancaria</td> -->

                                <td><a href="<?php echo base_url('pedido/'.$pedido->pedido_id);?>" class="btn btn-primary btn-sm">Ver</a></td>
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
                        echo "Você não fez nenhum pedido ainda";?>
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
