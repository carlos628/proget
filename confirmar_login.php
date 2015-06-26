<?php
include "config.php"; //inclui o arquivo de configurações

$db			=	mysql_connect ($host, $login, $senha); //conecta ao mysql
$basedados	=	mysql_select_db($database); //conecta a base de dados

$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login' AND senha = '$senha'", $db); //verifica se o login e a senha conferem
$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima

if ( $contagem == 1 ) {
  setcookie ("login", $login); //grava o cookie com o login
  setcookie ("senha", $senha); //grava o cookie com a senha
  echo "Usuário logado."; //se a senha digitada está correta, mostra a mensagem
  } else {
  echo "Login ou senha inválidos. <a href=javascript:history.go(-1)>Clique aqui para voltar.</a>"; //se a senha está incorreta mostra essa mensagem
  }
?>