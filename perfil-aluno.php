<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Meu perfil</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
</head>
<body>
	<div id="global">
		<?php 
			include("php/menu.php");
			include("php/main.php");
		?>
		<div class="content">
			<section>
				<h1>Perfil do Aluno</h1>
			</section>


			<?php 
				$matricula = isset($_SESSION['matricula']) ? $_SESSION['matricula'] : NULL;
				include("php/conexao_banco.php");
				
				$conexao_consulta = new Conexao();

				$dados = $conexao_consulta->conectar()->query("SELECT u.matricula,u.nome,u.rg,u.cpf,u.email,u.data_nascimento,u.sexo,u.estado_civil, db.banco,db.tipo,db.agencia,db.conta,db.operacao, df.qtd_familia,df.renda_familia, de.modalidade,de.curso,de.periodo_ano 
					from usuario u, dado_bancario db, dado_familia df, dado_estudantil de 
					WHERE u.matricula = db.matric_usu AND u.matricula = df.matric_usu AND u.matricula = de.matric_usu AND u.matricula ='$matricula'");

				$query = $dados->fetchAll(PDO::FETCH_ASSOC);
				if(count($query)){

				$dt_nascimento =  date('d/m/Y', strtotime($query[0]['data_nascimento']));
				echo "	
						<section>
						<h2>Dados gerais</h2>
							<p>Matrícula: {$query[0]['matricula']}</p>
							<p>Nome: {$query[0]['nome']}</p>
							<p>RG: {$query[0]['rg']}</p>
							<p>CPF: {$query[0]['rg']}</p>
							<p>E-mail: {$query[0]['email']}</p>
							<p>Data de Nascimento: ".$dt_nascimento."</p>
							<p>Sexo: {$query[0]['sexo']}</p>
							<p>Estado civil: {$query[0]['estado_civil']}</p>
						</section>

						<section>
							<h2>Dados bancários</h2>
								<p>Banco: {$query[0]['banco']}</p>
								<p>Tipo: {$query[0]['tipo']}</p>
								<p>Agência: {$query[0]['agencia']}</p>
								<p>Conta: {$query[0]['conta']}</p>
								<p>Operação: {$query[0]['operacao']}</p>
						</section>

						<section>
							<h2>Dados da família</h2>
							<p>Quantidade de pessoas na familia: {$query[0]['qtd_familia']}</p>
							<p>Renda familiar: R$ {$query[0]['renda_familia']}</p>
						</section>

						<section>
							<h2>Dados estudantis</h2>
							<p>Modalidade: {$query[0]['modalidade']}</p>
							<p>Curso: {$query[0]['curso']}</p>
							<p>Período: {$query[0]['periodo_ano']}º</p>
						</section>";
				}else{
					echo '<h2>Ocorreu um erro</h2>';
				}
			 ?>
			
		</div>
	</div>
</body>
</html>
