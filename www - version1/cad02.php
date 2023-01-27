<?php 
	require 'crip2gr4.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lib-Lab</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css-pasta/estilos.css">
		</head>
	<body>
		<nav>
			<ul class="topnav">
				<li><a href="index.php"> HOME</a></li>
				<li><a href="fale.php"> Fale conosco!</a></li>
				<li class="right"><a href="log.php">Login</a></li>
				<li class="right"><a class="active" href="cad.php">Cadastro</a></li>
			</ul>
		</nav>
		<div id="cad">
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
				//campo password
				if(!isset($_POST['password'])){
					die("Senha não foi transmitida!");
				}else{
					$senha=$_POST['password'];	
					if (strlen($senha)<5) {
						die("Senha necessita de pelo menos 5 digitos. Retorne!<br>");
					}
				}
				$_SESSION ['$username']=session_id();
				//require 'sess_start.php';
				//$username=$_SESSION['username'];//vairavel operador chama o usuario da sessão
				echo "<br><br><br><br> Seja bem vindo, $username ";
				//mostra ope
				echo"<br>Jogador= ".$username;
				
				if (!isset($_POST['email'])) {
					echo "o campo email não foi transmitido!";
				}
				else{
					$email=$_POST['email'];
					if (strlen($email)<5) {
						echo "email incompleto!";
					}
				}


				//require vem do conectaBd----------------------------------------------------------
				require("conectaBd.php");//ganha a variavel $conn
				if (require 'conectaBd.php') {
				echo("<br><br>Conseguiu conectar!<br>");
				}
				else{
					die("não conseguiu conectar!!");
				}
				//tentar cadastrar
				$sql ="INSERT INTO tabeltcc ";
				$sql.="(username,email,senha) ";
				$sql.="VALUES "; //todos os valores sao texto
				$sql.="(?,?,? ) "; //substituicao dos textos por parametros ?
				echo "<br> $sql <br>";

				$stmt = mysqli_prepare($conn,$sql);

				if (!$stmt){
					die("Impossivel preparar o cadastro no BD");
				} else{
					echo "preparou<br><br>";
				}

				//antes de bindar parametros no BD temos que preparar a senha
				$senha = FazSenha($username,$senha);//troca a digitada sem criptografia, pela criptografada
				echo "<br> $senha <br>";
				$bind = mysqli_stmt_bind_param($stmt, "sss", $username, $email, $senha);
				echo "<br> $bind <br>";
				if (!$bind){
					die("Impossivel vincular dados ao cadastro");
				}else{
					echo "vinculou <br><br>";
				}
				$exec = mysqli_stmt_execute($stmt);
				if(!$exec){
					die("Não consegui inserir os dados no Banco!! <br> Retorne e tente novamente: <a class='link' href='cad.php'>Cadastro</a>");
				}else{
					echo("Dados no Banco! Acesse o Menu $username ");
				}
				mysqli_stmt_close($stmt);
			?>
		</div>
	</body>
</html>