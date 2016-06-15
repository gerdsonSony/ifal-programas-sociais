<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Seleções SIPS</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<?php
		$id_prog = isset($_GET['idProg']) ? $_GET['idProg'] : NULL;
		$matricula = isset($_SESSION['matricula']) ? $_SESSION['matricula'] : NULL;
	 ?>
	<div id="global">

		<?php 
		 	include("php/main.php"); 
		 	include("php/menu.php");
		 ?>
		 
		<div class="content">
			<section>
			<?php 
				include("php/conexao_banco.php");
				$conexao_consulta = new Conexao();
				//Retorna o nome do programa pelo ID
				$retorna_nome = $conexao_consulta->conectar()->query("SELECT nome FROM programa WHERE id_programa = '$id_prog' ");
				$nome_prog = $retorna_nome->fetchAll(PDO::FETCH_ASSOC);
				echo '<h1>Seleções em '.$nome_prog[0]["nome"].'</h1>';
			 ?>
			</section>
			<section>
				<?php 
				echo "<ul class='selecao'>";
					$tipoUsuario = isset($_SESSION['tipo_usuario']) ? $_SESSION['tipo_usuario'] : NULL;
					if ($tipoUsuario == 2 ) {
					//Cria a ul para adicionar
							echo "<li >
								<a href='criar-selecao.php?idProg=$id_prog'>
									<div>
										<img src='img/new128.png' id=novo>
										<h2>Nova Seleção</h2>
									</div>
								</a>
							</li>";
						}
					//Consulta das seleções
		  			$consulta = $conexao_consulta->conectar()->query("select * from selecao WHERE id_programa = '$id_prog' order by dt_termino desc");
		  			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

						$dt_atual = DateTime::createFromFormat('Y-m-d',date('Y-m-d'));
		  				$dt_inicio =  DateTime::createFromFormat('Y-m-d', $linha['dt_inicio']);
		  				$dt_termino = DateTime::createFromFormat('Y-m-d', $linha['dt_termino']);
		  				
		  				//Quando for aluno
		  				$tagBotao="";
		  				if ($tipoUsuario == 1) {

		  					$dados = $conexao_consulta->conectar()->query("SELECT * FROM selecao_usuario WHERE id_selecao = {$linha['id_selecao']} AND matric_usuario = '$matricula'");
          					$query = $dados->fetchAll(PDO::FETCH_ASSOC);

					         //Se tem os dados cadastrados
					         if(count($query)){
					         	$tagBotao = "<p>Inscrito!</p>";
					         }else{
					         	$tagBotao = "<p><a href='php/usuario-selecao.php?id_selecao={$linha['id_selecao']}&id_prog=$id_prog'>Inscrever-se</a><p>";
					         }
		  				}
		  				 else if($tipoUsuario == 2){
		  				// 	//Quando for assistente
		  				 	$tagBotao = "<p><a href='alunos-selecao.php?id_selecao={$linha['id_selecao']}'>Ver Inscritos</a><p>";
		  				 }
		  				//Se a seleção já encerrou
		  				$tagLi = "<li>";
		  				if (strtotime($dt_termino->format('d-m-Y')) < strtotime($dt_atual->format('d-m-Y'))) {
		  					$tagLi = "<li class='encerrado'>";	
		  					$tagBotao="";
		  				}

		  				//Contagem de alunos Cadastrados
		  				$query_alunos = $conexao_consulta->conectar()->query("SELECT count(id_selecao) qtd FROM selecao_usuario WHERE id_selecao = {$linha['id_selecao']}");
          					$query_qtd_alunos = $query_alunos->fetchAll(PDO::FETCH_ASSOC);
          					$qtd_alunos = $query_qtd_alunos[0]["qtd"];

					    echo $tagLi."
					    		<div>
									<h2>{$linha['nome']}</h2><br>
									<p>{$linha['descricao']}</p><br>
									<p>De : ".$dt_inicio->format('d/m/Y')."</p>
									<p>Até : ".$dt_termino->format('d/m/Y')."</p>
									<p>Alunos Inscritos : {$qtd_alunos}</p>"
									.$tagBotao."
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
