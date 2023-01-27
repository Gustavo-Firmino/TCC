<?php
//conectar BD
//conexao 000webhost

		$servidorCONN="localhost";
		$usuarioCONN="id19548709_devm4st3r";
		$senhaCONN="!4kc)(CDwLm@d";
		$bdCONN="id19548709_libbanco"; //muda o servidor de BD
		$conn = mysqli_connect($servidorCONN, $usuarioCONN, $senhaCONN,$bdCONN);//passagem de parametros, para realizar */
		if(!$conn){
			die("Impossivel realizar conexão com o Banco de dados!");
		}
//xampp
/*
		$servidorCONN="127.0.0.1"; //proprio equipamento; porém caso utilize um servidor, basta mudar o IP
		$usuarioCONN="root"; //usuario de acesso ao BD
		$senhaCONN=""; // senha do acesso ao BD
		$bdCONN="id19548709_libbanco"; //muda a tabela de BD
		$conn = mysqli_connect($servidorCONN,$usuarioCONN,$senhaCONN,$bdCONN);//passagem de parametros, para realizar conexao, teste true = !0 | false = 0
		if(!$conn){
			die("Impossivel realizar conexão com o Banco de dados!");
		}
	*/
//serverSchool
/*
		$servidorCONN="172.16.0.8";		  
		$usuarioCONN="20017";
		$senhaCONN="!zzeune";
		$bdCONN="20017";
		$conn=mysqli_connect($servidorCONN,$usuarioCONN,$senhaCONN,$bdCONN);
		if(!$conn){
    			die("Não foi possível fazer a conexão com o BD");
		}
*/
?>
