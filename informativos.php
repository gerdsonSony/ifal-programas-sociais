<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meu perfil</title>
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
				<h1>Ultimos informativos</h1>
			</section>
				<?php 
					include("php/conexao_banco.php");
					echo "<ul  class='informativo' id='info'>";

						$conexao_consulta = new Conexao();
			  			$consulta = $conexao_consulta->conectar()->query("select * from informativo where tipo = 'informativo' ORDER by data desc");
			  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

						    echo "<li>
						    		<div>
										<h2>{$linha['titulo']}</h2><br>
										<p>{$linha['texto']}</p><br>
									</div>
								  </li>";
						}

					echo '</ul>';
				?>
		</div>
		<!-- </main> -->
	</div>
</body>
</html>
