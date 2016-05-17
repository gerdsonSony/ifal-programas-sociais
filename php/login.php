<?php

$login = $_POST['cpf'];

$senha = $_POST['senha'];


if( true ) { //verificar se o cpf existe no banco ($login=="")

	//if() verificar se a senha é correta

		header("Location: ..\\perfil-aluno.html");
	
	//else echo "senha invalida";


}else{

echo "cpf não existe no banco!";

}


?>