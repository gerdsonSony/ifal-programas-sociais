	
<div id="global">
	<nav>
		<a href="index.php">
			<section id="logo">
				<img src="img/logo64.png">
				<h2>SIPS</h2>
			</section>
		</a>';


			<?php 
			$logado = isset($_SESSION['statusUsu']) ? $_SESSION['statusUsu'] : NULL;
			$tipoUsuario = 0;

			

			if ($logado === true ) {

				//echo "lalalalala";
				//$idUsuario = $_SESSION['idUsuario']; 
				//$tipoUsuario = $_SESSION['tipoUsuario'];
				$tipoUsuario = isset($_SESSION['tipo_usuario']) ? $_SESSION['tipo_usuario'] : NULL;
				// echo "existe";
			}
			
			$menuIni = "<ul>
						<li>
							<a href='index.php'>Página Inicial</a>
						</li>
						<li>
							<a href='informativos.php'>Informativos</a>
						</li>
						<li>
							<a href='resultados-selecoes.php'>Resultados das seleções</a>
						</li>
						<li>
							<a href='programas-sociais-aluno.php'>Programas Sociais</a>
						</li>";

			$menuFinal ="<li>
							<a href='docs/calendario2016.pdf'>Calendário Acadêmico</a>
						</li>
						
						<li>
							<a href='fale-conosco.php'>Fale Conosco</a>
						</li>";

			switch ($tipoUsuario) {
				//Menu Aluno
				case 1:
					echo $menuIni."
						<li>
							<a href='programas-sociais.php'>Seleções</a>
						</li>
						<li>
							<a href='perfil-aluno.php'>Meu perfil</a>
						</li>
						<li>
							<a href='submeter-inscricao.php'>Submeter Inscrição</a>
						</li>
						<li>
							<a href='alterar-senha.php'>Alterar Senha</a>
						</li>".$menuFinal;
				break;
					//Menu Assistente
				case 2:
				echo $menuIni."  <li>
							<a href='criar-informativo.php'>Cadastrar informativos</a>
						</li>
						<li>
							<a href='alunos.php'>Alunos</a>
						</li>
						<li>
							<a href='programas-sociais.php'>Seleções</a>
						</li>
						<li>
							<a href='alterar-senha.php'>Alterar Senha</a>
						</li>".$menuFinal;
				break;
				default:
				echo  $menuIni.$menuFinal;
				break;

			}
			echo '</nav>'
		 ?>
		

