<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<div id="global">
		<?php 
			include("php/menu.php");
		 	include("php/main.php");
		 ?>
		
		<div class="content">
			<section>
				<h1>Cadastro de Usuário</h1>
			</section>
			<section>
				<form action="php/cadastro.php" method="POST">
					<label for="_matricula">Matrícula:</label><br/>
					<input type="text" name="matricula" id="_matricula" maxlength="20" autofocus required>
					<br/>

					<label for="_nome">Nome:</label><br/>
					<input type="text" name="nome" id="_nome" maxlength="80" required>
					<br/>

					<label for="_rg">Identidade:</label><br/>
					<input type="text" name="identidade" id="_rg"  maxlength="9" OnKeyPress="formatar('#######-#', this)" required>
					<br/>

					<label for="_cpf">CPF:</label><br/>
					<input type="text" name="cpf" id="_cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required>
					<br/>				

					<label for="_email">Email:</label><br/>
					<input type="email" name="email" id="_email" required>
					<br/>

					<label for="_data">Data de nascimento:</label><br/>
					<input type="date" name="data_nasc" id="_data" required>
					<br/>

					<label for="_sexo">Sexo:</label><br/>
					<select name="sexo">
					  	<option value="Masculino">Masculino</option>
					  	<option value="Feminino">Feminino</option>
				 	</select><br/>

					<label for="_estado_civil">Estado civil:</label><br/>
				 	<select name="estado_civil">
					  	<option value="Solteiro">Solteiro</option>
					  	<option value="Casado">Casado</option>
					  	<option value="Viuvo">Viúvo</option>
				 	</select><br/>

					<label for="_senha">Senha:</label><br/>
					<input type="password" name="senha" id="_senha" required>
					<br/>

					<label for="_senha1">Confirmar senha:</label><br/>
					<input type="password" name="senha1" id="_senha1" required>
					<br/>

					<input type="reset" value="Cancelar">
					<input type="submit" value="Confirmar">
				</form>
			</section>
		</div>
	</div>

	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>
