<?php
class Conexao{
	public function conectar(){
		try {
			$conexao = new PDO('mysql:host=localhost;dbname=sips;charset=utf8', 'root', '');
	        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	        return $conexao;
		} catch (PDOException $e) {
			 header("Location: ..\\erro.php");
		}
	}	
}
?>
	       
 