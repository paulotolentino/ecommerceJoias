<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cantinho da Moda - Cadastro</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/montserrat-font.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style-reg.css"/>
</head>
<body class="form-v10">
	<div class="text-center">              
         <a href="<?php echo base_url()?>" class="js-logo-clone"><img style="align: center;" src="<?php echo base_url()?>assets/images/cm.png" width="400px"></a>              
     </div>

	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="<?php echo base_url('cadastrar')?>" method="POST" id="myform">
				<div class="form-left">
					<h2>Informações Gerais</h2>
                    <div class="form-row">
                        <input type="text" name="nome" id="nome" class="input-text" placeholder="Nome" required>
                    </div>
                    <div class="form-row">
                        <input type="email" name="email" id="email" class="input-text" placeholder="Email" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="senha" id="senha" class="input-text" placeholder="Senha" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="senha2" id="senha2" class="input-text" placeholder="Senha novamente" required>
                    </div>
				</div>
				<div class="form-right">
					<h2>Detalhes de Contato</h2>
					<div class="form-row">
						<input type="text" name="numero" id="numero" placeholder="Número da residência" required>
					</div>
                    <div class="form-row form-row-1">
                        <input type="text" name="cep" class="cep" id="cep" placeholder="CEP"  maxlength="8" minlength="8" size="8" pattern="\d*" required>
                    </div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" pattern="^\d{2}$" name="ddd1" id="ddd1" placeholder="DDD" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" pattern="^\d{9}|\d{8}$" name="telefone1" id="telefone1" placeholder="Número de Telefone (obrigatório)" required>
						</div>
                    </div>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" pattern="^\d{2}$" name="ddd2" id="ddd2" placeholder="DDD">
						</div>
						<div class="form-row form-row-2">
							<input type="text" pattern="^\d{9}|\d{8}$" name="telefone2" id="telefone2" placeholder="Número de Telefone (opcional)">
						</div>
                    </div>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" pattern="^\d{2}$" name="ddd3" id="ddd3" placeholder="DDD">
						</div>
						<div class="form-row form-row-2">
							<input type="text" pattern="^\d{9}|\d{8}$" name="telefone3" id="telefone3" placeholder="Número de Telefone (opcional)">
						</div>
					</div>
					<div class="form-checkbox">
						<label class="container"><p>Eu aceito <a href="<?php echo base_url('termos')?>" class="text">os Termos de Condições</a> do Site.</p>
						  	<input type="checkbox" name="checkbox" required>
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Criar Conta">
					</div>
				</div>
			</form>
		</div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>