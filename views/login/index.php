<?php 
	if (!defined('KEY')) exit;
	check_session_login();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $this->title; ?></title>
	<link rel="stylesheet" type="text/css" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">	
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #eee;
		}

		.form-signin {
			background-color: #fff;
			border: solid 1px #ddd;
			box-shadow: 0px 5px 15px #bbb;
			padding: 15px;
			max-width: 330px;
			font-weight: normal;
			margin: 0 auto;
		}

		.form-signin-heading {
			font-weight: normal;
			margin-bottom: 10px;
		}

		.checkbox {
			font-weight: normal;
			margin-bottom: 10px;
		}

		.form-control {
			height: auto;
			padding: 10px;
			font-size: 16px;
		}

		.form-signin input[type="text"] {
		  margin-bottom: 0px;
		  border-radius: 5px;
		  border-bottom-left-radius: 0px;
		  border-bottom-right-radius: 0px;
		}

		.form-signin input[type="password"] {
		  margin-bottom: 20px;
		  border-radius: 5px;
		  border-top-left-radius: 0px;
		  border-top-right-radius: 0px;
		}

		.msg {
			background-color: #f00;
			opacity: 0.75;
			border: solid 1px #ddd;
			border-radius: 2.5px;
			box-shadow: 0px 5px 15px #bbb;
			padding: 15px;
			max-width: 330px;
			text-align: center;
			color: #fff;
			font-weight: normal;
			margin: 0 auto;
			margin-top: 15px;
		}

	</style>
</head>
<body>
    <div class="container">
        <form class="form-signin" method="POST">
			<h2 class="form-signin-heading" style="text-align: center">Acesso ao Sistema</h2>
			<label class="sr-only">Usuário</label>
			<input type="text" name="form_user" class="form-control" placeholder="Usuário" required autofocus>
			<label class="sr-only">Senha</label>
			<input type="password" name="form_password" class="form-control" placeholder="Senha" required>  
			<div class="checkbox">
				<label class="checkbox">
					<input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Lembrar-me
				</label>	
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
		</form>
		<?php 
			$msg = true;
			if(isset($msg)):
		 ?>
		<div class="msg">
			Você precisa está logado para continuar
		</div>
		<?php endif ?>
	</div>
</body>
</html>