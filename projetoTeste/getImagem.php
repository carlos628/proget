<?php
	$host = "127.0.0.1";
	$username = "root";
	$password = "";
	$db = "camisetasbanco";
	$PicNum = $_GET["PicNum"];

	mysql_connect($host,$username,$password) or die("Imposs�vel conectar ao banco."); 
	@mysql_select_db($db) or die("Imposs�vel conectar ao banco."); 
	$result=mysql_query("SELECT * FROM PESSOA WHERE PES_ID=$PicNum") or die("Imposs�vel executar a query "); 
	$row=mysql_fetch_object($result); 
	Header( "Content-type: image/gif"); 
	echo $row->PES_IMG; 
?>

