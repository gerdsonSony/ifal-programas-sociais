<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Fale conosco</title>
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
				<h1>Dados para Contato</h1>
			</section>
			<section>
				<div class="informativo">
					<h3>Instituto Federal de Alagoas</h3><br>
					<p>
						Email de Contato: portal@ifal.edu.br<br />
						Telefone: (82) 3194-1150<br />
						Endereço: Rua Odilon Vasconcelos, 103, Maceió (AL), 57035-660<br/>
						Horário de Funcionamento: 07h às 19h.
					</p>
				</div>

				<div class="informativo">
					<h3>Coordenadoria de Serviço Social</h3>
					<p>
						Telefone: (82) 2126-7057<br />
						Horário de Funcionamento: 08h às 18h.
					</p>
				</div>
			</section>
		</div>
	</div>
</body>
</html>
