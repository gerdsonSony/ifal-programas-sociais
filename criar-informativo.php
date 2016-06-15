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
					<h1>Criar Informativo</h1>
				</section>
				<section>
					<form method="post" action="php/criar-informativo.php" enctype="multipart/form-data">
						<label for="_titulo">Título:</label><br/>
						<input type="text" name="titulo" id="_titulo" maxlength="30"/>
						<br/>

						<label for="_texto">Texto:</label><br/>
						<textarea rows="5" name="texto" id="_texto" maxlength="300"></textarea>
						<br/>

						<label for="_arquivo">Arquivo:</label><br/>
						<input  type="file" accept="application/pdf" class="upload" name="arquivo" id="_arquivo">
						<br/>

						 <label for="_tipo">Tipo:</label><br/>
							<select name='tipo'>
							  	<option value='informativo'>Informativo</option>
							  	<option value='resultado'>Resultado</option>
					 	</select><br/>

						<input type="submit" value="Postar">
						<input type="reset" value="Cancelar">
					</form>
				</section>
			</div>
	</div>
</body>
</html>
