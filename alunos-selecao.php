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
		 	$id_selecao = isset($_GET['id_selecao']) ? $_GET['id_selecao'] : NULL;
		 ?>
		 
		<div class="content">
			<section>
				<h1>Alunos Cadastrados</h1>
			</section>
			<section>
				<?php 
					include("php/conexao_banco.php");
					echo "<table  class='tabela'>";

						$conexao_consulta = new Conexao();
			  			$consulta = $conexao_consulta->conectar()->query("SELECT u.matricula,u.nome,u.cpf,de.modalidade,de.curso, df.qtd_familia,df.renda_familia,TRUNCATE(df.renda_familia/df.qtd_familia,2) renda_familiar
							FROM usuario u,	dado_estudantil de,	dado_familia df, selecao_usuario su  
							WHERE u.matricula = de.matric_usu AND u.matricula = df.matric_usu AND
							u.matricula = su.matric_usuario AND su.id_selecao = '$id_selecao'
							order by renda_familiar	");

			  			echo "<tr><th>Matricula</th> <th>Nome</th> <th>CPF</th> <th>modalidade</th> <th>Curso</th> <th>Qtd de Pessoas</th> <th>Renda total</th> <th>Renda Familiar</th></tr>";

			  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						    echo "<tr>
						    		<td>{$linha['matricula']}</td>
									<td>{$linha['nome']}</td>
									<td>{$linha['cpf']}</td>
									<td>{$linha['modalidade']}</td>
									<td>{$linha['curso']}</td>
									<td>{$linha['qtd_familia']}</td>
									<td>{$linha['renda_familia']}</td>
									<td>{$linha['renda_familiar']}</td>
								  </tr>";
						}
					echo '</table>';
				?>
			</section>
		</div>
	</div>
</body>
</html>
