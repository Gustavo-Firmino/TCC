<?php 
	require("funcoes.php");
 ?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
		    <meta charset="UTF-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" type="text/css" href="css/style.css">
		    <title>Página PHP</title>
		</head>                             
	<body>
			<h1>Um site qualquer</h1><br>
			<ul class="topnav">
				<li><a class="active" href=""> HOME</a></li>
				<li><a href="login01.php">LOGIN</a></li>
				<li class="right"><a href="sair.php" id="sair">SAIR</a></li>
			</ul>
			<div class="doc">	
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam tempora maiores porro doloribus iste nobis numquam cupiditate saepe, nihil, aut suscipit, reiciendis voluptate corrupti accusantium sint laborum. Sit, facere vel. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi distinctio omnis eius aliquid ab tempore laudantium harum eligendi. Itaque error ad exercitationem maxime, provident harum optio animi delectus impedit quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus? Commodi eum delectus dignissimos laboriosam laborum tenetur nostrum corporis nemo unde, recusandae tempore non sed! Voluptatum animi sint perspiciatis iure? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non icing elit. Excepturi distinctio omnis eius aliquid ab tempore laudantium harum eligendi. Itaque error ad exercitationem maxime, provident harum optio animi delectus impedit quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus? Commodi eum delectus dignissimos laboriosam laborum tenetur nostrmquam cupiditate saepe, nihil, aut suscipit, reiciendis voluptate corrupti accusantium sint laborum. Sit, facere vel. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi distinctio omnis eius aliquid ab tempore laudantium harum eligendi. Itaque error ad exercitationem maxime, provident harum optio animi dele <br><br><br><br><br><br><br><br><br><br><br><br>
				<br>
				<img src="images/logo.png" alt="Logo uniserverZ">
				
				<br><br>			

				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam tempora maiores porro doloribus iste nobis numquam cupiditate saepe, nihil, aut suscipit, reiciendis voluptate corruptibus tempora quos blanditiis dolorem nostrum reprehenderit quia repudiandae suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed doloribus debitis exercitationem sapiente rerum sequi corporis, id, vitae impedit veritatis quam dolorem est aliquid deserunt assumenda mollitia molestiae! Dicta, enim.
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam tempora maiores porro doloribus iste nobis numquam cupiditate saepe, nihil, aut suscipit, reiciendis voluptate corrupti accusantium sint laborum. Sit, facere vel. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi distinctio omnis eius aliquid ab temporror ad exercitationem maxime, provident harum optio animi delectus impedit quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, temporibus? Commodi eum delectus dignissimos laboriosam laborum tenetur nostrum corporis nemo unde, recusandae tempore non sed! Voluptatum animi sint perspiciatis iure? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non reprehenderit saepe assumenda. Enim consequuntur velit harum, error perferendis nihil. Architecto temporibus tempora quos blanditiis dolorem nostrum reprehenderit quia repudiandae suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed doloribus debitis exercitationem sapiente rerum sequi corporis, id, vitae impedit veritatis quam dolorem est aliquid deserunt assumenda mollitia molestiae! Dicta, enim.
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<?php
					//operaces basicas
					$x = 5;
					$y = 2;
					echo $x + $y;
					echo "<br> <br>";
					echo $x * $y;
					echo "<br>";
					echo $x ** $y;
					echo "<br>";
					echo $x . $y;
					echo "<br>";
					echo $x . "vnjiwqj";
					echo "<br>";

					//funcoes
					echo "Vamos testar uma função de soma: ".$x = maisUm(5); 
					echo "<br>";
					echo "Vamos testar uma função com um valor padrão: ".$x = maisUm();
					echo "<br>";
					echo "Vamos testar uam função de subtração: ". $x = menosUm(5);
					echo "<br>";
					echo "Vamos utilizar o PI: ". $x = nossoPi();
					echo "<br>";
					echo "Vamos testar uma função de soma: ".$x = maisUm($x);
				?><br><br>
					<!-- Antigo envio até o cadastro.
				<a href="cads/cad01.php"> Vá para página de cadastro.</a>-->
			</div>
	</body>

</html>