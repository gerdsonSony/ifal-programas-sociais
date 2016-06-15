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
		?>

		<form action="php/recuperar-senha.php" method="POST">
			<p>
				<input class="campo" type="email" name="email" placeholder="Email" required>
			</p>
			<br>
			<p>
				<input class="botao" type="submit" value="Solicitar recuperação">
			</p>
		</form>
	</div>
</body>
</html>
