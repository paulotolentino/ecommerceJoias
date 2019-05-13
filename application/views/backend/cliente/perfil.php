<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="<?php echo base_url()?>">Home</a> <span class="mx-2 mb-0">/</span>
				<strong class="text-black">Perfil</strong></div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="page-content">
			<div class="form-v10-content">
				<form class="form-detail" action="<?php echo base_url('atualizar')?>" method="POST" id="myform">
					<div class="form-left">
                        <h2>Informações Gerais</h2>
                        <div class="form-group">
							<div class="form-row col-md-2">
								<label for="nome" style="color:black;">Nome:</label>
							</div>
							<div class="form-row col-md-10">
								<input type="text" id="nome" name="nome"
									value="<?php echo ucwords($cliente->usuario_nome);?>" required>
							</div>
                        </div>
                        <div class="form-group">
							<div class="form-row col-md-2">
								<label for="email" style="color:black;">Email:</label>
							</div>
							<div class="form-row col-md-10">
								<input type="text" id="email" name="email"
									value="<?php echo $cliente->usuario_email;?>" required>
							</div>
						</div>
                        <?php
                        $num = 1;
                        foreach($telefones as $telefone){?>
                        <div class="form-group">
							<div class="form-row col-md-2">
								<label for="ddd<?php echo $num ?>" style="color:black;">Fone<?php echo $num; ?>:</label>
							</div>
							<div class="form-group col-md-10">
                                <div class="form-row form-row-1 col-md-4">
                                    <input type="text" pattern="^\d{2}$" name="ddd<?php echo $num ?>" id="ddd<?php echo $num ?>"
                                    value="<?php echo substr($telefone->telefone_numero, 0, 2);?>" <?php if($num ==1) echo 'required'?>>
                                </div>
                                <div class="form-row form-row-2 col-md-8">
                                    <input type="text" pattern="^\d{9}|\d{8}$" name="telefone<?php echo $num ?>"
                                    id="telefone<?php echo $num ?>" value="<?php echo substr($telefone->telefone_numero, 2);?>"
                                    <?php if($num ==1) echo 'required'?>>
                                </div>
							</div>
						</div>
                        <?php
                        $num++;
                        }
                        ?>
					</div>
					<div class="form-right">
						<h2>Detalhes de Endereço</h2>
						<div class="form-group">
							<div class="form-row col-md-2">
								<label for="numero" style="color:white;">Número:</label>
							</div>
							<div class="form-row col-md-10">
								<input type="text" id="numero" name="numero"
									value="<?php echo $endereco->endereco_numero;?>" required>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
								<label for="cep" style="color:white;">CEP:</label>
							</div>
							<div class="form-row col-md-10">
								<input type="text" id="cep" name="cep" value="<?php echo $endereco->endereco_cep;?>"
									maxlength="8" minlength="8" size="8" pattern="\d*" required>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
                                <label for="rua" style="color:white;">Rua:</label>
                            </div>
							<div class="form-row col-md-10">
								<input type="text" id="rua" name="rua" value="<?php echo $endereco->endereco_rua;?>"
									required>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
                                <label for="bairro" style="color:white;">Bairro:</label>
                            </div>
							<div class="form-row col-md-10">
								<input type="text" id="bairro" name="bairro"
									value="<?php echo $endereco->endereco_bairro;?>" required>

							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
                                <label for="cidade" style="color:white;">Cidade:</label>
                            </div>
							<div class="form-row col-md-10">
								<input type="text" id="cidade" name="cidade"
									value="<?php echo $endereco->endereco_cidade;?>" required>

							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
                                <label for="estado" style="color:white;">Estado:</label>
                            </div>
							<div class="form-row col-md-10">
								<input type="text" id="estado" name="estado"
									value="<?php echo $endereco->endereco_estado;?>" required>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row col-md-2">
                                <label for="pais" style="color:white;">País:</label>
                            </div>
							<div class="form-row col-md-10">
								<input type="text" id="pais" name="pais" value="<?php echo $endereco->endereco_pais;?>"
									required>
							</div>
						</div>
						<div class="form-row-last">
							<input type="submit" id="numero" name="register" class="register" value="Atualizar Dados">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>