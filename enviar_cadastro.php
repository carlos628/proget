<!camisetas">
<html>
    <head>
        <title>Cadastro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>

    <body>
        <?php
        include "config.php"; //aqui inserimos as v�riaveis da p�gina de configura��o

        $db = mysql_connect($host, $login, $senha); //conectamos ao mysql
        $basedados = mysql_select_db($database); //selecionamos o database escolhido
        $errors = "";
        $senha2 = "";

        $pesquisar = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login'", $db); //conferimos se o login escolhido j� n�o foi cadastrado
        $contagem = mysql_num_rows($pesquisar); //traz o resultado da consulta acima

        if ($contagem == 1) {
            $errors .= "Login escolhido j� cadastrado.<br>"; //se o login j� existir, ele adiciona o erro
        }

        if ($login == "") {
            $errors .= "Voc� n�o digitou um login<br>"; //confere se o campo login n�o ficou vazio
        }

        if ($senha == "") {
            $errors .= "Voc� n�o digitou uma senha<br>"; //confere se o campo senha n�o ficou vazio
        }

        if ($senha != '$senha2') {
            $errors .= "Voc� digitou 2 senhas diferentes.<br>"; //adiciona o erro caso o usu�rio digitou 2 senhas diferentes
        }

        if ($errors == "") { //checa se houve ou n�o erros no cadastro
            $cadastrar = mysql_query("INSERT INTO `$tabela` (nome, login, senha, email)
    VALUES ('$nome','$login','$senha','$email')", $db); //insere os campos na tabela

            if ($cadastrar == 1) {
                echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif><br><br><br>Cadastro com sucesso.</font></div>"; //se cadastrou com sucesso o usu�rio aparece essa mensagem
            } else {
                echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif><br><br><br>Ocorreu um erro no servidor ao tentar se cadastrar.</font></div>"; //caso houver um erro quanto as configura��es aparece essa mensagem
            }
        } else {
            echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Ocorreu os seguintes erros ao tentar se cadastrar:<br><br>$errors</font></div>"; //mostra os erros do usu�rio, caso houver
        }
        ?>
    </body>
</html>