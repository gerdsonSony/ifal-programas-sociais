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
				<h1>Resultados das Seleções</h1>
			</section>
			<?php 
					include("php/conexao_banco.php");
					echo "<ul  class='informativo'>";

						$conexao_consulta = new Conexao();
			  			$consulta = $conexao_consulta->conectar()->query("select * from informativo where tipo = 'resultado' ORDER by data desc");
			  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

						    echo "<li>
						    		<div>
										<h2>{$linha['titulo']}</h2><br>
										<p>{$linha['texto']}</p><br>
										<a download href='docs/{$linha['arquivo']}'>Baixar Anexo</a>
									</div>
								  </li>";
						}

					echo '</ul>';
				?>
	</div>
</body>
</html>
