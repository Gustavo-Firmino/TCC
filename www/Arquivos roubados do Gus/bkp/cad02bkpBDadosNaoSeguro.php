<?php
    require("sess_start.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro - Tela 2</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>				
			<H1>Resultado do cadastro</H1> <br>
			<ul>
				<li><a href="index.php"> HOME</a></li>
				<li><a href=""> LIVROS</a></li>
				<li><a href=""> NOVIDADES</a></li>
                <li><a href="menupri.php">MENU</a></li>
                <li><a class="active" href="cad01.php">CADASTRO</a></li>
				<li><a href="login01.php"> LOGIN</a></li>
		    </ul>
			<div class= "doc">	
					<?php 
						if(!isset($_POST['cpf'])){
							echo"O CPF não foi preenchido";
						}
						$cpf=$_POST['cpf'];
						if (strlen($cpf)<11) {
							echo"Um CPF necessia de 11 digitos. Retorne.<br>";
						}else {
							echo"CPF: $cpf <br>";
						}
						$nomeCompleto=$_POST['nome'];//os vetores (definidos entre []) foram definidos no campo "name" do cad01
						if (strlen($nomeCompleto)<=4) {
							echo"O nome não foi preenchido corretamente. Retorne!<br>";
						}else{
							echo"Nome completo: $nomeCompleto <br>";
						}				
						//checagem dos campos radio 
						$sex=$_POST['sexo']; //dados do cad01
						if (!isset($sex)){
							echo"Você precisa escolher o campo sexo! Retorne.<br>";
						}else{
							echo"Sexo: $sex <br>";
						}
						$data=$_POST['date'];//$data é uma variavel local, criada para realizar a ligação com o nascimento atraves do metodo post.
						echo"Nacimento: $data <br>";	
						
						echo"Usuário RM= ".$_SESSION['rm'];
						$rm = $_SESSION['rm'];

						//tentar cadastrar
						$sql ="INSERT INTO usuario ";
						$sql.="(CPF,nomeCOmpleto,sexo,dtNasc,operador) ";
						$sql.="VALUES ";
						$sql.="('$cpf','$nomeCompleto','$sex','$data','$rm') ";
						//die($sql); //para realizar testes, com o intuito de ver se o SLQ deu certo
						
						//require vem do conectaBd
						require("conectaBd.php");
						echo("<br><br>Conseguiu conectar!<br>");

						//utilizaremos as operações CRUD (Create[Insert], Read[Select], Update[Update], Delete[Delete])
						/*
						C = INSERT -> Deu certo/errado -> V/F
						R = SELECT -> Deu errado / Deu certo (sem dados)/Deu certo (com dados)
						U = UPDATE -> Deu certo/errado -> V/F
						D = DELETE -> Deu certo/errado -> V/F
						*/
						$resutadoBD=mysqli_query($conn, $sql);//inserçao no BD
						if(!$resutadoBD){
							echo("Não consegui inserir os dados no Banco!");
						}else{
							echo("Dados no Banco!<br>");
						}

					?>				
			</div>
	</body>
</html>