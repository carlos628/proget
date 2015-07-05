<?php $pagina = 'logar'; ?>
<?php $login_cookie = $_COOKIE['login']; ?>
<head>
    <!--    <meta charset="utf-16">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Hege Refsnes">
    <link rel="icon" href="icon/ico1.jpg">

    <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
<!--    <title>Camisetaria Fashion</title>-->
    
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/> 
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<?php include('navbar.php'); ?>
<div class="container">


    <title> Login de Usuario </title>
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-20 col-sm-9">

            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>

            <div class="jumbotron">
                <h1>USUARIO</h1>
                <h2>Rede Sociais</h2>
                <a href="https://www.facebook.com" target="_blank" class="im">Facebook</a>
                <a href="https://www.pinterest.com" target="_blank" class="pin">Pinterest</a>
                <a href="https://twitter.com" target="_blank" class="twt">Twitter</a>
                <a href="https://plus.google.com" target="_blank" class="gm">Google Plus</a>
                <a href="https://instagram.com" target="_blank" class="ins">Instagram</a> 

            </div>

            <?php
            if (isset($login_cookie)) {
//                echo"Bem-Vindo, $login_cookie <br>";
                echo"Essas informacoes <font color='red'>PODEM</font> ser acessadas por voce";
            } else {
                echo"Essas informacoes <font color='red'>NAO PODEM</font> ser acessadas por voce";
                echo"<br><a href='login.html'>Faca Login</a> Para ler o conteudo";
            }
            ?>
        </div>
    </div>
</div>

<hr>
<footer>

    <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
</footer>
<hr>