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
		<?php 
			include("php/conexao_banco.php");

			echo "<ul class='programa'>";

			$logado = isset($_SESSION['statusUsu']) ? $_SESSION['statusUsu'] : NULL;
			$tipoUsuario = 0;

			if ($logado == true ) {

				$tipoUsuario = isset($_SESSION['tipo_usuario']) ? $_SESSION['tipo_usuario'] : NULL;
				if ($tipoUsuario == 2 ) {
						echo '<li >
								<a href="criar-programa.php">
									<div>
										<img src="img/new128.png" id="novo">
										<h2>Novo programa</h2>
									</div>
								</a>
							</li>';
				}
			}

			$conexao_consulta = new Conexao();
  			$consulta = $conexao_consulta->conectar()->query("select * from programa");
  			
  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
			    echo "<li  id='aluno'>
						<div >
								<img src='img/{$linha['imagem']}'>
								<h2>{$linha['nome']}</h2><br>
								<p>{$linha['descricao']}</p><br>
								<p>Valor: R\${$linha['valor']}</p>
						</div>
				</li>";
			}
			echo '</ul>';
		 ?>
		</div>
	</div>
</body>
</html>
