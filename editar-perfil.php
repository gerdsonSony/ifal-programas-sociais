<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar perfil</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/editar-perfil.css">
</head>
<body>
	<div id="global">
		<?php 
			include("php/menu.php");
		 	include("php/main.php");
		 	
		 ?>
		<div class="content">
			<section>
				<h1>Editar perfil</h1>
			</section>
			<section>

				<form id="msform" action="php/cadastro-completo.php" method="POST">
					<!-- progressbar -->
					<ul id="progressbar">
						<!-- <li class="active">Dados gerais</li> -->
						<li lass="active">Dados bancários</li>
						<!-- <li>Dados de endereço</li> -->
						<li>Dados da família</li>
						<li>Dados estudantis</li>
					</ul>
					<!-- fieldsets --><!-- Dados gerais -->
					<!-- <fieldset> 
						<input type="text" name="nome_completo" placeholder="Nome Completo" />
						<input type="date" name="data_nasc" placeholder="Data de nascimento"/>
						<input type="text" name="sexo" placeholder="Sexo"/>
						<input type="text" name="rg" placeholder="Identidade"/>
						<input type="text" name="cpf" placeholder="CPF" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"/>
						<input type="email" name="email" placeholder="Email" />
						<input type="text" name="estado_civil" placeholder="Estado Civil" />
						<input type="text" name="telefone" placeholder="Telefone" />

						<input type="button" name="next" class="next action-button" value="Próximo" />
					</fieldset> -->

					<fieldset> <!-- Dados bancários -->
						<select name="tipo">
							<!-- <option value="tipo" disabled selected >Tipo de Conta</option> -->
						  	<option value="Corrente">Conta Corrente</option>
						  	<option value="Poupança">Poupança</option>
				 		</select><br/>
						<select name="banco">
							<!-- <option value="Banco" disabled selected >Banco</option> -->
						  	<option value="Caixa econômica Federal">Caixa econômica Federal</option>
						  	<option value="Banco do Brasil">Banco do Brasil</option>
				 		</select><br/>
						<!-- <input type="text" name="banco" placeholder="Banco" /> -->
						<input type="text" name="agencia" placeholder="Agência" required />
						<input type="number" name="conta" placeholder="Conta Corrente" required />
						<input type="number" name="operacao" placeholder="Operação" required />

						<!-- <input type="button" name="previous" class="previous action-button" value="Anterior" /> -->
						<input type="button" name="next" class="next action-button" value="Próximo" />
					</fieldset>
					<!-- Dados de endereço -->
					<!-- <fieldset> 
						<input type="text" name="endereco" placeholder="Endereço" />
						<input type="text" name="num_endereco" placeholder="Número" />
						<input type="text" name="bairro" placeholder="Bairro" />
						<input type="text" name="cidade" placeholder="Cidade" />
						<input type="text" name="estado" placeholder="Estado" />
						<input type="text" name="referencia" placeholder="Ponto de referência" />

						<input type="button" name="previous" class="previous action-button" value="Anterior" />
						<input type="button" name="next" class="next action-button" value="Próximo" />
					</fieldset> -->

					<!-- Dados de família -->
					<fieldset> 
						<!-- <input type="text" name="nome_mae" placeholder="Nome da mãe" />
						<input type="text" name="ocup_mae" placeholder="Ocupação da mãe" />
						<input type="text" name="rem_mae" placeholder="Remuneração da mãe" />
						<input type="text" name="nome_pai" placeholder="Nome do pai" />
						<input type="text" name="ocup_pai" placeholder="Ocupação do pai" />
						<input type="text" name="rem_pai" placeholder="Remuneração do pai" />

						<input type="text" name="qntd_dep" placeholder="Número de dependentes do aluno" />
						<input type="text" name="qntd_fam" placeholder="Número de integrantes da família" /> -->

						<input type="number" name="qtd_familia" placeholder="Número de pessoas na familia" required />
						<input type="number" name="ren_fam" placeholder="Renda total Familiar" required/>

						<input type="button" name="previous" class="previous action-button" value="Anterior" />
						<input type="button" name="next" class="next action-button" value="Próximo" />
					</fieldset>

					<fieldset> <!-- Dados Estudantis -->
						<select name = "modalidade">
							<!-- <option value="Modalidade" disabled selected >Modalidade</option> -->
						  	<option value="superior">Superior</option>
						  	<option value="tecnico">Técnico</option>
						  	<option value="subsequente">Subsequente</option>
						  	<option value="proeja">Proeja</option>
				 		</select><br/>
						<input type="text" name="curso" placeholder="Curso" required/>
						<input type="text" name="periodo" placeholder="Período" required/>		
											
						<input type="button" name="previous" class="previous action-button" value="Anterior" />
						<input type="submit" name="submit" class="submit action-button" value="Cadastrar" />
					</fieldset>
				</form>
			</section>
		</div>
	</div>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html>
