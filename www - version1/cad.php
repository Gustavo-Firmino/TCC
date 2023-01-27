<!DOCTYPE html>
<html>
	<head>
		<title>Lib-Lab</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href=" css-pasta/estilos.css">
		</head>
	<body onload="document.form1.username.focus()">
		<nav>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a href="fale.php"> Fale conosco!</a></li>
				<li class="right"><a href="log.php">Login</a></li>
				<li class="right"><a class="active" href="">Cadastro</a></li>
			</ul>
		</nav>
		<div id="cad">
			<form name="form1" id="form1" method="POST" onsubmit="return validar()" action="cad02.php" > 
				<h1>Cadastro</h1>
				<label for="senha">Nome de Usuário:</label>
				<input type="text" name="username" maxlength="150" size="40" value="" placeholder="Username" id="username" autocomplete="off">
				<label for="senha">Email:</label>
				<input type="text" name="email" minlength="5" maxlength="50" size="40" placeholder="Email" id="email" autocomplete="off">
				<label for="senha">Senha:</label>
				<input type="password" name="password" minlength="8" maxlength="50" size="25" placeholder="Password" id="password"><br>

				<input type="submit" name="submit" id="submit" value="Cadastrar">
				<a href="log.php">Já tem conta? Entrar</a>
			</form>

		</div>
	</body>
</html>