<?php
	session_start();

	include("conexao_banco.php");

	  $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $imagem = $_FILES['imagem'];

    $nome_final = 'default.png';
    if ($_FILES['imagem']['name'] != '') {
    	$nome_final = md5(time()).'.png';
		  $upload = move_uploaded_file($_FILES['imagem']['tmp_name'], '../img/'.$nome_final);
    }

   try {
       $conexao_inserir = new Conexao();
       $insert = $conexao_inserir->conectar()->prepare("INSERT INTO programa (nome,valor,descricao, imagem) VALUES (:nome,:valor,:descricao, :imagem) ");
       $insert->bindValue(':nome',$nome);
       $insert->bindValue(':valor',$valor);
       $insert->bindValue(':descricao',$descricao);
       $insert->bindValue(':imagem',$nome_final);
       $insert->execute();
      header("Location: ..\\sucesso.php?msg=Informativo cadastrado com sucesso!");
   } catch (Exception $e) {
       header("Location: ..\\erro.php");
   }
   
?>