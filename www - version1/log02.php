<?php 
		require("crip2gr4.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lib-Lab</title>
		<link rel="stylesheet" type="text/css" href="css-pasta/estilos.css">
	</head>

	<body>
		<nav>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a href="fale.php"> Fale conosco!</a></li>
				<li class="right"><a class="active" href="log.php">Login</a></li>
				<li class="right"><a href="cad.php">Cadastro</a></li>
			</ul>
		</nav>
		<div id="cad">
			<h1>Login</h1>
			<p>Duolibras</p>
			<?php

				//os vetores (definidos entre []) foram definidos no campo "name" do cad01
				//campo operador
				if(!isset($_POST['username'])){
					echo"O campo de Username não foi preenchido";
				}
				$username=$_POST['username'];
				if (strlen($username)<5) {
					die ("Um Username necessita de pelo menos 5 digitos. Retorne!<br>");
				}else {
					echo"Username: $username <br>";
				}
				$_SESSION ['$username']=session_id();
				//campo password
				if(!isset($_POST['password'])){
					die("Senha não foi transmitida!");
				}else{
					$senhalog=$_POST['password'];  
					if (strlen($senhalog)<5) {
						die("Senha necessita de pelo menos 5 digitos. Retorne!<br>");
					}
				}
				$_SESSION ['$username']=session_id();
				//require 'sess_start.php';
				//$username=$_SESSION['username'];//vairavel operador chama o usuario da sessão
				echo "<br><br><br><br> Seja bem vindo, $username ";
				//mostra ope
				echo"<br>Jogador= ".$username;


					//login 
					require("conectaBd.php");
					$sql="SELECT senha from tabeltcc where username=? "; //nao indica o texto $username; e sim apenas um parametro, representado por (?) 
					//echo("SQL: ".$sql); //teste do sql
					$stmt = mysqli_prepare($conn,$sql); //conexao aberta via require, que utiliza o prepare (SQL preparado)
					if (!$stmt){
						die("Impossivel preparar a consulta ao BD");
					}

					$bind = mysqli_stmt_bind_param($stmt,"s",$username); //vinculo de parametro de entrada, na string ao começo do programa há uma posicao de um campo por parametro "s" tal letra indica quantidade e tipo string 
					if (!$bind){
						die("Impossivel vincular dados à consulta");
					}

					$exec = mysqli_stmt_execute($stmt); // execucao do comando preparado
					if (!$exec){
						die("Impossivel executar consulta");
					}
					$result = mysqli_stmt_bind_result($stmt, $senha); //obter resultados da execucao do comando ($exec = mysqli_stmt_execute($stmt);)
					if (!$result){
						die("Não foi possivel recuperar dados da consulta");
					}
					$fetch = mysqli_stmt_fetch($stmt);
					if (!$fetch){
						die("Não conseguiu associar dados de retorno");
					}
					if ($fetch == null){
						die("Essa combinação login/senha não foi possível de ser encontrada.");
					}
					//lembre-se: O fethc já já copiou os resultados indicados pelo bind_result
					mysqli_stmt_close($stmt);

				//teste senha antigo
					//(strlen($senhaBD)<100) and ($senha == $senhaBD)  //sem criptografia na senha que esta no BD //$senha vem do post

					//pega $senha e compara com $senhaBD (ambas criptografadas); com criptografia no BD
					if(ChecaSenha($senhalog, $senha)) {
						echo("Você está no sistema $username : <br><br>");
						if (!session_start()){ /*O not "!" inverte a lógica, portanto se for não verdadeiro irá executar o bloco*/
							die("Impossivel prosseguir!! Sessão não foi iniciada");
						}

					}else{
						die("Retorne para <a href='log.php' class='link'>Login</a> e tente novamente");
					}

					echo "<br><br><br> teste 001 ";
				?>


		</div>
	</body>
</html>