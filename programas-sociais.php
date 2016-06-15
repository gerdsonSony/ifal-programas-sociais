<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meu perfil</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/aluno.css">
</head>
<body>
	<div id="global">
		<?php 
			include("php/menu.php");
			include("php/main.php");
		?>
		<div class="content">
			<section>
				<h1>Programas Sociais</h1>
			</section>

			<ul class="programa">

			<?php 
				include("php/conexao_banco.php");

				$conexao_consulta = new Conexao();
      			$consulta = $conexao_consulta->conectar()->query("select * from programa");
      			
      			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
				   
				    echo "<li class='programa'>
						<a href='selecao.php?idProg={$linha['id_programa']}'>
							<div >
								<img src='img/{$linha['imagem']}'>
								<h2>{$linha['nome']}</h2>
							</div>
						</a>
					</li>";
				}
				echo '</ul>';
			?>
		</div>
	</div>
</body>
</html>
