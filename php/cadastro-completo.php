<?php
  session_start();
	include("conexao_banco.php");
    $matricula = isset($_SESSION['matricula']) ? $_SESSION['matricula'] : NULL;
    if ($matricula) {

        $banco = $_POST['banco'];
        $tipo = $_POST['tipo'];
        $agencia = $_POST['agencia'];
        $conta = $_POST['conta'];
        $operacao = $_POST['operacao'];

        $qtd_familia = $_POST['qtd_familia'];
        $ren_fam = $_POST['ren_fam'];

        $modalidade = $_POST['modalidade'];
        $curso = $_POST['curso'];
        $periodo_ano = $_POST['periodo'];

       try {
            $conexao_inserir = new Conexao();
            $insertBancario = $conexao_inserir->conectar()->prepare("INSERT INTO dado_bancario (matric_usu, banco, tipo, agencia, conta, operacao)
            VALUES(:matric_usu, :banco, :tipo, :agencia, :conta, :operacao) ");

           $insertBancario->bindValue(':matric_usu',$matricula);
           $insertBancario->bindValue(':banco',$banco);
           $insertBancario->bindValue(':tipo',$tipo);
           $insertBancario->bindValue(':agencia',$agencia);
           $insertBancario->bindValue(':conta',$conta);
           $insertBancario->bindValue(':operacao',$operacao);
           $insertBancario->execute();


           $insertFamilia = $conexao_inserir->conectar()->prepare("INSERT INTO dado_familia (matric_usu, qtd_familia, renda_familia)
            VALUES(:matric_usu, :qtd_familia, :renda_familia) ");

           $insertFamilia->bindValue(':matric_usu',$matricula);
           $insertFamilia->bindValue(':qtd_familia',$qtd_familia);
           $insertFamilia->bindValue(':renda_familia',$ren_fam);
           $insertFamilia->execute();

           $insertEstudantil = $conexao_inserir->conectar()->prepare("INSERT INTO dado_estudantil (matric_usu, modalidade, curso,periodo_ano)
            VALUES(:matric_usu, :modalidade, :curso,:periodo_ano) ");

           $insertEstudantil->bindValue(':matric_usu',$matricula);
           $insertEstudantil->bindValue(':modalidade',$modalidade);
           $insertEstudantil->bindValue(':curso',$curso);
           $insertEstudantil->bindValue(':periodo_ano',$periodo_ano);
           $insertEstudantil->execute();

          header("Location: ..\\sucesso.php?msg=Usuário cadastrado com sucesso!");
         
       } catch (Exception $e) {
         header("Location: ..\\erro.php");
       }
    }else{
      echo "nada";
    }

    
   
?>