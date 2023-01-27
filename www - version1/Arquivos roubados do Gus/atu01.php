<?php
	require("sess_start.php");
	require("conectaBd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">		     <link rel="stylesheet" type="text/css" href="css/style.css">
			<title>Atualizar</title>
		</head>
	<body>
		<h1>Atualizar registros</h1><br>
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
				$sql = "select * from usuario";
				$dataset = mysqli_query($conn,$sql);
				if (!$dataset) {
					die("Impossivel recuperar registros!");
				}
				if (mysqli_num_rows($dataset)==0) {
					die("Nenhum usuario cadastrado no banco de dados!");
				}
				echo("<table>");
					echo("<tr>");
						echo("<th></th>");
						echo("<th>CPF</th>");
						echo("<th>NOME COMPLETO</th>");
							echo("<tr>");
								echo("<td><input type='radio' name='rdCPF'value='$CPF'></td>");
								echo("<td>$CPF</td>");
								echo("<td>$nomeCompleto</td>");
							echo("</tr>");

					echo("</tr>");
				while ($linhaBd=mysqli_fetch_assoc($dataset)) {
				    $CPF = $linhaBd['CPF'];
				    $nomeCompleto = $linhaBd['nomeCompleto'];			
				}
				echo("</table>");
			?>
		</div>
	</body>
</html>