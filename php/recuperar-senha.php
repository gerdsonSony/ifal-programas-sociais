<?php
    
$email = $_POST['email'];


if( true ) { //verificar se o email existe no banco ($email=="")


header("Location: ..\\sucesso.php");



}else{ //caso email não exista no banco

echo "Email não existe no nosso banco de dados!";

}


?>