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
				<h1>Submeter Inscrição</h1>
			</section>

			<section>
				<h2>Dados gerais</h2>
					<p>Nome: Jose da Silva</p>
					<p>Matrícula: 123456789</p>
					<p>Curso: Sistemas de Informação</p>
					<p>E-mail: email@gmail.com</p>
					<p>Data de Nascimento: XX/XX/XXX</p>
					<p>Identidade: XXXXXXXXXX</p>
					<p>Ano de Ingresso: XXXX</p>
			</section>

			<section>
				<h2>Dados bancários</h2>
					<p>
						Banco: XXXXXXX
					</p>
					<p>
						Agência: XXXXXXX
					</p>
					<p>
						Conta: XXXXXXX
					</p>
			</section>

			<section>
				<h2>Dados de endereço</h2>
				<div>
					<h3>Lorem ipsum dolor sit amet</h3>
					<p>
						Suspendisse nec risus urna. Sed sollicitudin sem sit amet sagittis condimentum. Sed at pharetra lacus, id mollis massa. Mauris at sodales ligula. Pellentesque pharetra lectus at convallis pretium. Fusce laoreet, felis sed elementum volutpat, sapien orci varius sem, sit amet eleifend justo felis sed urna. Vestibulum molestie orci ex.
					</p>
				</div>

				<div>
					<h3>Nullam eget sem tincidunt</h3>
					<p>
						Praesent eleifend, nunc quis ullamcorper tristique, lorem nisl elementum turpis, non ultrices lectus diam vel nulla. Mauris tincidunt elit ac faucibus consectetur. Cras aliquam massa nisi, vitae eleifend eros mollis vel. Pellentesque lacinia sem metus, vitae aliquet lacus molestie in.
					</p>
				</div>
			</section>

			<section>
				<h2>Dados da família</h2>
				<div>
					<h3>Lorem ipsum dolor sit amet</h3>
					<p>
						Suspendisse nec risus urna. Sed sollicitudin sem sit amet sagittis condimentum. Sed at pharetra lacus, id mollis massa. Mauris at sodales ligula. Pellentesque pharetra lectus at convallis pretium. Fusce laoreet, felis sed elementum volutpat, sapien orci varius sem, sit amet eleifend justo felis sed urna. Vestibulum molestie orci ex.
					</p>
				</div>

				<div>
					<h3>Nullam eget sem tincidunt</h3>
					<p>
						Praesent eleifend, nunc quis ullamcorper tristique, lorem nisl elementum turpis, non ultrices lectus diam vel nulla. Mauris tincidunt elit ac faucibus consectetur. Cras aliquam massa nisi, vitae eleifend eros mollis vel. Pellentesque lacinia sem metus, vitae aliquet lacus molestie in.
					</p>
				</div>
			</section>

			<section>
				<h2>Dados estudantis</h2>
				<div>
					<h3>Lorem ipsum dolor sit amet</h3>
					<p>
						Suspendisse nec risus urna. Sed sollicitudin sem sit amet sagittis condimentum. Sed at pharetra lacus, id mollis massa. Mauris at sodales ligula. Pellentesque pharetra lectus at convallis pretium. Fusce laoreet, felis sed elementum volutpat, sapien orci varius sem, sit amet eleifend justo felis sed urna. Vestibulum molestie orci ex.
					</p>
				</div>

				<div>
					<h3>Nullam eget sem tincidunt</h3>
					<p>
						Praesent eleifend, nunc quis ullamcorper tristique, lorem nisl elementum turpis, non ultrices lectus diam vel nulla. Mauris tincidunt elit ac faucibus consectetur. Cras aliquam massa nisi, vitae eleifend eros mollis vel. Pellentesque lacinia sem metus, vitae aliquet lacus molestie in.
					</p>
				</div>
			</section>

			<form action="#" method="POST">
				Escolha o programa no qual deseja se inscrever:
				<select>
					<option value="estudo">Bolsa de Estudo</option>
				  	<option value="transporte">Auxílio Transporte</option>
				  	<option value="alimentacao">Auxílio Alimentação</option>
				  	<option value="moradia">Auxílio Moradia</option>
				  	<option value="apoio">Auxílio Apoio às Atividades Estudantis</option>
			 	</select><br/>

			 	<input type="submit" value="Inscrever-se">

			 	<a href="editar-perfil.php">
					<button type="button" class="botao">Editar perfil</button>
				</a>
			</form>
		</div>
	</div>
</body>
</html>
