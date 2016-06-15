<?php
	session_start();

	include("conexao_banco.php");

	$matricula = $_SESSION['matricula'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $arquivo = $_FILES['arquivo'];
    $tipo = $_POST['tipo'];
   	$data = date('Y-m-d H:i:s');

    $nome_final = '';
    if ($_FILES['arquivo']['name'] != '') {
    	$nome_final = md5(time()).'.pdf';
		$upload = move_uploaded_file($_FILES['arquivo']['tmp_name'], '../docs/'.$nome_final);
    }

   try {
       $conexao_inserir = new Conexao();
       $insert = $conexao_inserir->conectar()->prepare("INSERT INTO informativo (matricula_usu,titulo, texto, arquivo,tipo,data) VALUES (:matricula_usu,:titulo, :texto, :arquivo,:tipo,:data) ");

       $insert->bindValue(':matricula_usu',$matricula);
       $insert->bindValue(':titulo',$titulo);
       $insert->bindValue(':texto',$texto);
       $insert->bindValue(':arquivo',$nome_final);
       $insert->bindValue(':tipo',$tipo);
       $insert->bindValue(':data',$data);
       $insert->execute();
      header("Location: ..\\sucesso.php?msg=Informativo cadastrado com sucesso!");
   } catch (Exception $e) {
     header("Location: ..\\erro.php");
   }
   
?>