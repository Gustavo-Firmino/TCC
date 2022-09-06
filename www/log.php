<?php
    //require("sess_start.php");
	require("crip2gr4.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php
			require 'js-pasta-tcc/validalog.js';
		?>
		<meta charset="utf-8">
		<title>Lib-Lab</title>
		<link rel="stylesheet" type="text/css" href="css-pasta/estilos.css">
	</head>

	<body onload="document.form1.username.focus()">
		<nav>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a href="fale.php"> Fale conosco!</a></li>
				<li class="right"><a class="active" href="">Login</a></li>
				<li class="right"><a href="cad.php">Cadastro</a></li>
			</ul>
		</nav>
		<div id="cad">
			<form name="form1" id="form1" method="POST" onsubmit="return valida()" action="log02.php" > 
				<h1>Login</h1>
				
				<label for="senha">Nome de Usuário:</label>
				<input type="text" name="username" maxlength="150" size="40" placeholder="Username" id="username" autocomplete="off">
				<label for="senha">Senha:</label>
				<input type="password" name="password" minlength="8" maxlength="50" size="25" placeholder="Password" id="password">
				<br>

				<input type="submit" name="submit" id="submit" value="Logar">
				<a href="cad.php">Ainda não tem conta? Cadastrar-se</a>
			</form>
		</div>
	</body>
</html>