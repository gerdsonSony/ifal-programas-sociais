	<main id="corpo">
		<header>
			<h1 class="logo">Sistema de Programas Sociais - IFAL</h1>
			<div class="profile">
			<?php 
				//$idUsuario = $_SESSION['idUsuario'];
				$logado = isset($_SESSION['statusUsu']) ? $_SESSION['statusUsu'] : NULL;

				if ($logado == TRUE ) {
					$tipoUsuario = isset($_SESSION['tipo_usuario']) ? $_SESSION['tipo_usuario'] : NULL;
					
					if ($tipoUsuario == 2) {
						echo   '<img class="foto" src="img/assistente.png"> 
								<div class="dropdown">
									<a href="php/sair.php">Sair</a>
								</div>';
					}else{
						echo   '<img class="foto" src="img/aluno.png"> 
								<div class="dropdown">
									<a href="editar-perfil.php">Editar perfil</a>
									<a href="php/sair.php">Sair</a>
								</div>';
					}
										
				}else{
					echo 
					'<img class="foto" src="img/userDefault.png">
					<div class="dropdown">
						<a href="login.php">Login</a>
					</div>';
					
				}
			 ?>
			
				
			</div>
		</header>

