<?php

$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "camisetasbanco";

if($imagem != NULL) { 
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal); 

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

		mysql_connect($host,$username,$password) or die("Imposs�vel Conectar"); 

		@mysql_select_db($db) or die("Imposs�vel Conectar"); 

		mysql_query("INSERT INTO PESSOA (PES_IMG) VALUES ('$mysqlImg')") or die("O sistema n�o foi capaz de executar a query"); 

		unlink($nomeFinal);
		
		header("location:exibir.php");
	}
} 
else { 
	echo"Voc� n�o realizou o upload de forma satisfat�ria."; 
} 

?>

