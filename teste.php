<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Teste de Acesso</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
if ( $contagem == 1 ) {
//aqui deixe aberto, pois iremos fechar somente no final da p�gina
  ?>
<div align="center">OI!</div>
<?
  } else {
        echo "Voc� n�o est� logado."; //aqui que terminamos o IF que iniciamos na p�gina
        }
  ?>
</body>
</html>