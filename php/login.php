<?php
	session_start();
	$strigHash = "Em 2016 um @ foi Lançado!!";

	$login = $_POST['cpf'];
	$senha_usu = md5($_POST['senha'].$strigHash);

	include("conexao_banco.php");

	$conexao_login = new Conexao();
	try {

		$dados = $conexao_login->conectar()->query("SELECT * FROM usuario WHERE cpf = '$login' AND senha = '$senha_usu'");

		$query = $dados->fetchAll(PDO::FETCH_ASSOC);
		if(count($query) != 1){
			header("Location: ..\\login.php?msg=Login inválido");
		}
		else{
			$_SESSION['mensagem'] = "";
			$_SESSION['matricula'] = $query[0]["matricula"];
	     	// $_SESSION['nome'] = $query[0]["nome"];
	        $_SESSION['tipo_usuario'] = $query[0]["tipo_usuario"];
	        $_SESSION['statusUsu'] = TRUE;
	        
	       header("Location: ..\\index.php");
		}
	} catch (Exception $e) {
		 header("Location: ..\\erro.php");
	}
?>