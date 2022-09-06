<?php
		//conectar BD
		$servidorCONN="127.0.0.1"; //proprio equipamento; porém caso utilize um servidor, basta mudar o IP  
		$usuarioCONN="root";
		$senhaCONN="root";
		$bdCONN="bdtcc"; //muda o servidor de BD
		$conn=mysqli_connect($servidorCONN,$usuarioCONN,$senhaCONN,$bdCONN);
		if(!$conn){
    			die("Não foi possível fazer a conexão com o BD");
		} 
?>