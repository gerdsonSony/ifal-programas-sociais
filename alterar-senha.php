<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alterar senha</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="login">
		<?php 
			include("php/logo.php");
		 ?>

		<form action="php/alterar-senha.php" method="POST">
			<p>
				<input class="campo" type="password" name="senhaAnt" placeholder="Senha Antiga" required>
			</p>
			<br>
			<p>
				<input class="campo" type="password" name="senhaNov" id="senha1" placeholder="Nova Senha" required>
			</p>
			<br>
			<p>
				<input class="campo" type="password" name="RepSenhaNov" id="senha2" placeholder="Repetir Nova Senha" required>
			</p>
			<br>
			<p>
				<input class="botao" type="submit" value="Alterar">
			</p>
		</form>
	</div>
</body>
</html>
