<?php
    require("sess_start.php");
	require("crip2gr4.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro - Tela 2</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	</head>
	<body>				
		<H1>Resultado do cadastro</H1> <br>
		<ul class="topnav">
			<li><a href="index.php"> HOME</a></li>
			<li><a href="menupri.php">MENU</a></li>
			<li><a class="active" href="cad01.php">CADASTRO</a></li>
			<li><a href="login01.php"> LOGIN</a></li>
			<li class="right"><a href="sair.php" id="sair">SAIR</a></li>
		</ul>
		<div class= "doc">	
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
					echo"Usename: $username <br>";
				}
			//campo password
				if(!isset($_POST['senha'])){
					die("Senha não foi transmitida!");
				}else{
					$senha=$_POST['senha'];	
					if (strlen($senha)<5) {
						die("Senha necessita de pelo menos 5 digitos. Retorne!<br>");
					}
				}
			//mostra operador
				echo"<br>Jogador= ".$_SESSION['username'];
				$username=$_SESSION['username'];//vairavel operador chama o cpf da sessaõ

			//require vem do conectaBd----------------------------------------------------------
				require("conectaBd.php");//ganha a variavel $conn
				echo("<br><br>Conseguiu conectar!<br>");
				//tentar cadastrar
				$sql ="INSERT INTO tabeltcc ";
				$sql.="(username,email,senha) ";
				$sql.="VALUES "; //todos os valores sao texto
				$sql.="(?,?,? ) "; //substituicao dos textos por parametros ?
				
				$stmt = mysqli_prepare($conn,$sql);
				if (!$stmt){
					die("Impossivel preparar o cadastro no BD");
				}
				//antes de bindar parametros no BD temos que preparar a senha
				$senha = FazSenha($username,$senha);//troca a digitada sem criptografia, pela criptografada
				$bind = mysqli_stmt_bind_param($stmt,"sss",$username,$email,$senha);
				if (!$bind){
					die("Impossivel vincular dados ao cadastro");
				}
				$exec = mysqli_stmt_execute($stmt);
				if(!$exec){
					echo("Não consegui inserir os dados no Banco! <br> Retorne e tente novamente: <a class='link' href='cad.php'>Cadastro</a>");
				}else{
					echo("Dados no Banco! Acesse o Menu<br>");
				}
				mysqli_stmt_close($stmt);

			?>				
		</div>
	</body>
</html>