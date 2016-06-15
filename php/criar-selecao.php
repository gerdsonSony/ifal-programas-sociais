<?php
	session_start();

	  include("conexao_banco.php");
    $idProg = $_POST['idProg'];
	  $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $dtInicio = $_POST['dtInicio'];
    $dtTermino = $_POST['dtTermino'];

   try {
       $conexao_inserir = new Conexao();
       $insert = $conexao_inserir->conectar()->prepare("INSERT INTO selecao (id_programa,nome,descricao, dt_inicio, dt_termino)
       VALUES (:id_programa,:nome,:descricao,:dt_inicio,:dt_termino) ");

       $insert->bindValue(':id_programa',$idProg);
       $insert->bindValue(':nome',$nome);
       $insert->bindValue(':descricao',$descricao);
       $insert->bindValue(':dt_inicio',$dtInicio);
       $insert->bindValue(':dt_termino',$dtTermino);

       $insert->execute();
      header("Location: ..\\sucesso.php?msg=Seleção cadastrada com sucesso!");
   } catch (Exception $e) {
       header("Location: ..\\erro.php");
   }
   
?>