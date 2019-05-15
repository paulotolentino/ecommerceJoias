<head>
	<title>Cantinho da Moda - Login</title>
	<link rel="stylesheet" href="css/style-login.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!DOCTYPE html>
	<html lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="<?php echo base_url('login/try') ?>">   
					<span class="login100-form-title p-b-43">
						Faça Login Para Continuar
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Senha é obrigatória">
						<input class="input100" type="password" name="senha">
						<span class="focus-input100"></span>
						<span class="label-input100">Senha</span>
					</div>

					<!-- <div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="#" class="txt1">
								Esqueceu sua senha?
							</a>
						</div>
					</div> -->


					<div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="Entrar">
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Não tem uma conta? <a href="<?php echo base_url('cadastro'); ?>"> Cadastre-se.</a>
						</span>
					</div>

					<!-- <div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div> -->
					<br>
					<a href="#" onClick="history.go(-1)">
						<h5>
                            < Voltar
                        </h5>
                    </a>
                </form>
                <div class="login100-more" style="background-image: url('<?php echo base_url();?>assets/images/joia.png');">
                </div>
            </div>
        </div>
	</div>





	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>




<!-- <form method="POST" action="<?php echo base_url('login/try') ?>">
	Email: <input type="text" name="email">
	<br>
	Senha:<input type="password" name="senha">
	<br>
	<input type="submit" value="Entrar">

</form> -->
