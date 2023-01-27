<?php
	require("sess_start.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Menu principal</title>
	</head>
	<body>
			<h1>Você chegou ao menu principal</h1> <br>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a class="active" href="menupri.php">MENU</a></li>
				<li><a href="cad01.php">CADASTRO</a></li>
				<li><a href="login01.php"> LOGIN</a></li>
				<li><a href="del01.php"> DELETAR REGISTROS</a></li>
				<li><a href="atu01.php"> ATUALIZAR</a></li>
				<li class="right"><a href="sair.php" id="sair">SAIR</a></li>
			</ul>
			<div class="doc">
				<?php
					echo("<br><br> Operador CPF= ".$_SESSION['cpf']);
				?>
		</div>
	</body>
</html>