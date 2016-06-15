<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Criar informativo</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/aluno.css"> -->
</head>
<body>
	<div id="global">
		
		<?php 
			include("php/menu.php");
		 	include("php/main.php");
		 ?>
		
			<div class="content">
				<section>
					<h1>Cadastrar novo programa social</h1>
				</section>
				<section>
					<form method="post" action="php/criar-programa.php" enctype="multipart/form-data">
						<label for="_nome">Nome:</label><br/>
						<input type="text" name="nome" id="_nome" maxlength="80"/>
						<br/>

						<label for="_valor">Valor:</label><br/>
						<input type="number" value="0.0" step="0.01" name="valor" id="_valor" maxlength="80"/>
						<br/>

						<label for="_descricao">Descrição:</label><br/>
						<textarea rows="15" name="descricao" id="_descricao" maxlength="300"></textarea>
						<br/>

						<label for="_foto">Imagem:</label><br/>
						<input  type="file" name="imagem" id="_foto">
						<br/>

						<input type="submit" value="Cadastrar">
						<input type="reset" value="Cancelar">

					</form>

				</section>
			</div>
	</div>
</body>
</html>
