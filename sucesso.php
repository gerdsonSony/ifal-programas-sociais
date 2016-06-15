<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SIPS-IFAL</title>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="login">
		<?php 
			include("php/logo.php");
			$msg = isset($_GET['msg']) ? $_GET['msg'] : NULL;
			echo "<h3>$msg</h3><br/>";
		?>
		<p>
			<a href="index.php">
				<input class="botao" type="button" value="Entre no sistema">
			</a>
		</p><br/><br/>
	</div>
</body>
</html>
