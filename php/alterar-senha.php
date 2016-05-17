<?php
  
$senhaAnt = $_POST['senhaAnt'];
$senhaNov = $_POST['senhaNov'];
$RepSenhaNov = $_POST['RepSenhaNov'];

  if( true ) { //verificar senha antiga ($senhaAnt=="")

  	//if($senhaNov==$RepSenhaNov)

		header("Location: ..\\sucesso.html");

		//else echo "Nova senha não é igual a repetição";



}else{

echo "Senha antiga invalida!";

}

?>