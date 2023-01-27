<?php 
	require 'crip2gr4.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Duolibras</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<!-- 
			comentado para teste do cad2
			<link rel="stylesheet" type="text/css" href=" css-pasta/frm.css">
		-->
		<link rel="stylesheet" type="text/css" href="css-pasta/topnav.css">
	</head>
	<body>
		<!--Menu Superior-->
		<nav>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a href="fale.php"> Fale conosco!</a></li>
				<li class="right"><a href="log.php">Login</a></li>
				<li class="right"><a class="active" href="">Cadastro</a></li>
			</ul>
		</nav>
		<!--id colocado para o css, apenas-->
		<div id="cad">
		<!---->
		<?php 
			if(!isset($_POST['username'])){
				echo"O campo de Username não foi preenchido";
				}
			else{
				$username=$_POST['username'];
			}
			
			if (strlen($username)<5) {
				die ("Um Username necessita de pelo menos 5 digitos. Retorne!<br>");
			}
			else {
				echo"Usename aprovado com sucesso, seja bem vindo".$username."! <br>";
			}

			if(!isset($_POST['password'])){
				echo"O campo de senha não foi preenchido";
				}
			else{
				$senha=$_POST['password'];
			}

			
			if (strlen($senha)<5) {
				die ("Sua senha necessita de pelo menos 5 digitos. Retorne!<br>");
			}
			else {
				echo"senha aprovada com sucesso,prossiga! <br>";
			}

			$_SESSION ['username']=session_id();
			

		?>
			
		</div>

	</body>
</html>