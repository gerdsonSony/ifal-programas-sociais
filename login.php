<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIPS-IFAL</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="login">
		<?php 
			include("php/logo.php");
		 
		 	echo isset($_GET['msg']) ? $_GET['msg'] : NULL;
		 ?>
		<form action="php/login.php" method="POST">
			<p>
				<input class="campo" type="text" name="cpf" id="cpf" maxlength="14" placeholder="CPF" autofocus OnKeyPress="formatar('###.###.###-##', this)" required>
			</p>
			<br>
			<p>
				<input class="campo" type="password" name="senha" id="senha" placeholder="Senha" required>
			</p>
			<br>
			<p>
				<input type="submit" value="Entrar">
			</p>
		</form>
		<section id="links">
			<a href="recuperar-senha.php" id="esqueci-senha">Esqueci a senha!</a>
			<a href="cadastro.php" id="cadastro">Cadastre-se</a>
		</section>
	</div>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>
