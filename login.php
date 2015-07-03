<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('127.0.0.1', 'root', '');
$db = mysql_select_db('camisetasbanco');
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("ERRO AO SELECIONAR");
    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos SEU BURRO');window.location.href='login.html';</script>";
        die(OIE);
    } else {
        setcookie("login", $login);
        header("Location:logar.php");
    }
}
?>


