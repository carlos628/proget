<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "camisetasbanco";

mysql_connect($host,$username,$password) or die("Impossível conectar ao banco."); 

@mysql_select_db($db) or die("Impossível conectar ao banco"); 

$result=mysql_query("SELECT * FROM PESSOA") or die("Impossível executar a query"); 

while($row=mysql_fetch_object($result)) { 
	echo "<img src='getImagem.php?PicNum=$row->PES_ID' \">"; 
} 

?>
