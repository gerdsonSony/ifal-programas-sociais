<?php
	session_start();

	  include("conexao_banco.php");

    $id_selecao = isset($_GET['id_selecao']) ? $_GET['id_selecao'] : NULL;
    $matricula = isset($_SESSION['matricula']) ? $_SESSION['matricula'] : NULL;
    $id_prog = isset($_GET['id_prog']) ? $_GET['id_prog'] : NULL;
    if ($matricula) {
       try {
           $conexao_inserir = new Conexao();

          $dados = $conexao_inserir->conectar()->query("SELECT u.matricula,u.nome,u.rg,u.cpf,u.email,u.data_nascimento,u.sexo,u.estado_civil, db.banco,db.tipo,db.agencia,db.conta,db.operacao, df.qtd_familia,df.renda_familia, de.modalidade,de.curso,de.periodo_ano 
            from usuario u, dado_bancario db, dado_familia df, dado_estudantil de 
            WHERE u.matricula = db.matric_usu AND u.matricula = df.matric_usu AND u.matricula = de.matric_usu AND u.matricula ='$matricula'");

          $query = $dados->fetchAll(PDO::FETCH_ASSOC);

          //Se tem os dados cadastrados
          if(count($query)){
             $insert = $conexao_inserir->conectar()->prepare("INSERT INTO selecao_usuario (id_selecao,matric_usuario)
             VALUES (:id_selecao,:matric_usuario) ");

             $insert->bindValue(':id_selecao',$id_selecao);
             $insert->bindValue(':matric_usuario',$matricula);
             $insert->execute();

            header("Location: ..\\selecao.php?idProg=$id_prog");

          }else{
           header("Location: ..\\erro.php?msg=Dados incompletos! Atualize-os");
          }












           /**/

       } catch (Exception $e) {
           header("Location: ..\\erro.php");
       }

    }else{
       header("Location: ..\\erro.php");
    }
?>