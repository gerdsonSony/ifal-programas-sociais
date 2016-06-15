<?php
	include("conexao_banco.php");

    $strigHash = "Em 2016 um @ foi Lançado!!";

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $rg = $_POST['identidade'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $nascimento = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $tipo_usu = 1;
    $senha = md5($_POST['senha'].$strigHash);

   try {
        $conexao_inserir = new Conexao();
        $insert = $conexao_inserir->conectar()->prepare("INSERT INTO Usuario (matricula, nome, rg, cpf, email, data_nascimento, sexo, estado_civil, tipo_usuario, senha) 
        VALUES(:matricula, :nome, :rg, :cpf, :email, :data_nascimento, :sexo, :estado_civil, :tipo_usuario, :senha) ");
       $insert->bindValue(':matricula',$matricula);
       $insert->bindValue(':nome',$nome);
       $insert->bindValue(':rg',$rg);
       $insert->bindValue(':cpf',$cpf);
       $insert->bindValue(':email',$email);
       $insert->bindValue(':data_nascimento',$nascimento);
       $insert->bindValue(':sexo',$sexo);
       $insert->bindValue(':estado_civil',$estado_civil);
       $insert->bindValue(':tipo_usuario',$tipo_usu);
       $insert->bindValue(':senha',$senha);
       $insert->execute();

       header("Location: ..\\sucesso.php?msg=Usuário cadastrado com sucesso!");
     
   } catch (Exception $e) {
     header("Location: ..\\erro.php");
   }
   
?>