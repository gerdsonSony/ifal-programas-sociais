<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alunos</title>
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
				<h1>Alunos</h1>
			</section>
			<section>
				<?php 
					include("php/conexao_banco.php");
					echo "<table  class='tabela'>";

						$conexao_consulta = new Conexao();
			  			$consulta = $conexao_consulta->conectar()->query("select * from usuario where tipo_usuario = '1'");

			  			echo "<tr><th>Matricula</th> <th>Nome</th> <th>RG</th> <th>CPF</td> <th>E-mail</th>	<th>Data de Nascimento</th> <th>Sexo</th> <th>Estado Civil</th> </tr>";

			  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
			  				$data = date("d/m/Y", strtotime ($linha['data_nascimento']));
						    echo "<tr>
						    		<td>{$linha['matricula']}</td>
									<td>{$linha['nome']}</td>
									<td>{$linha['rg']}</td>
									<td>{$linha['cpf']}</td>
									<td>{$linha['email']}</td>
									<td>$data</td>
									<td>{$linha['sexo']}</td>
									<td>{$linha['estado_civil']}</td>
								  </tr>";
						}
					echo '</table>';
				?>
			</section>
		</div>
	</div>
</body>
</html>
