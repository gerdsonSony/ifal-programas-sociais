<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastrar seleção</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<div id="global">
		
		<?php 
			include("php/menu.php");
		 	include("php/main.php");
			$id_prog = isset($_GET['idProg']) ? $_GET['idProg'] : NULL;
		 ?>
		
			<div class="content">
				<section>
					<h1>Cadastrar nova seleção</h1>
				</section>
				<section>
					<form method="post" action="php/criar-selecao.php">
						<!-- Input do id do programa -->
						<?php 
							echo "<input type='hidden' name='idProg' value='$id_prog' />";
						 ?>
						<label for="_nome">Nome:</label><br/>
						<input type="text" name="nome" id="_nome" maxlength="30" required />
						<br/>

						<label for="_descricao">Descrição:</label><br/>
						<textarea rows="5" name="descricao" id="_descricao" maxlength="300"></textarea>
						<br/>

						<label for="_dtInicio">Data de Início:</label><br/>
						<input type="date" name="dtInicio" id="_dtInicio" required />
						<br/>

						<label for="_dtTermino">Data de Término:</label><br/>
						<input type="date" name="dtTermino" id="_dtTermino" required />
						<br/>

						<input type="submit" value="Cadastrar">
						<input type="reset" value="Cancelar">

					</form>

				</section>
			</div>
	</div>
</body>
</html>
