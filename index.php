<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIPS</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<?php ?>
	<div id="global">

		<?php 
		 	include("php/main.php"); 
		 	include("php/menu.php");
		 ?>
		 
		<div class="content">
			<section>
				<h1>Informativos e Resultados</h1>
			</section>
			<section>
				<?php 
					include("php/conexao_banco.php");
					echo "<ul  class='informativo'>";

						$conexao_consulta = new Conexao();
			  			$consulta = $conexao_consulta->conectar()->query("select * from informativo ORDER by data desc");
			  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

			  				$img;
			  				if($linha['tipo'] === "informativo"){
			  					$img = "img/informativo.png";
			  				}else{
			  					$img = "img/resultado.png";
			  				}

			  				$link;
			  				if ($linha['arquivo'] == null || $linha['arquivo']  =='') {
			  					$link = null;
			  				}else{
			  					$link ="<a download href='docs/{$linha['arquivo']}'>Baixar Anexo</a>";
			  				}
						    echo "<li>
						    		<div>
										<img src='$img'>
										<h2>{$linha['titulo']}</h2><br>
										<p>{$linha['texto']}</p><br>"
										.$link."
									</div>
								  </li>";
						}

					echo '</ul>';
				?>
			</section>
		</div>
	</div>
</body>
</html>
