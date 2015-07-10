<?php $pagina = 'infantil'; ?>
<?php
require 'inc/common.php';
session_start();

//dd($_SESSION);
?>
<!jonas lindo>
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Hege Refsnes">
    <link rel="icon" href="icon/ico1.jpg">

    <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <title>Camisetaria Fashion</title>

    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/> 
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
</head>

<!--INCLU?O DO ARQUIVO PAGINA-->
<?php include('navbar.php'); ?>


<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-20 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1>Moda Infantil</h1>                           
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="thumbnails list-inline">
                        <li class="span4">
                            <a href="imagen_home_1.php" class="thumbnail">
                                <img src="img/infantil/1465_tam12_3.jpg">
                            </a>
                            <h2>Loop Dill</h2>
                            <p>R$ 12.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1474_tam12_3.jpg">
                            </a>
                            <h2>Bill</h2>
                            <p> R$ 9.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar  &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1482_tam12_3.jpg">
                            </a>
                            <h2>Pool</h2>
                            <p>R$ 15.50 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1631_tam12_3.jpg">
                            </a>
                            <h2>Tholl Di</h2>
                            <p>R$ 8.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1915_tam12_3.jpg">
                            </a>
                            <h2>Duo Pool</h2>
                            <p>R$ 12.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1837_tam12_3.jpg">
                            </a>
                            <h2>Full Thow</h2>
                            <p>R$ 15.00 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1631_tam11.gif">
                            </a>
                            <h2>Bull</h2>
                            <p>R$ 15.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1465_tam11.gif">
                            </a>
                            <h2>Hooy</h2>
                            <p>R$ 6.00 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                        <li class="span4">
                            <a href="#" class="thumbnail">
                                <img src="img/infantil/1915_tam11.gif">
                            </a>
                            <h2>Thy</h2>
                            <p>R$ 12.90 </p>
                            <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                        </li>
                    </ul>
                </div>

            </div><!--/wor--></div>
        <?php include('./linkColuna.php'); ?>
        <?php include('./header.php'); ?>
       
    </div><!--/.col-xs-6.col-sm-9-->





</div><!--/.sidebar-offcanvas_barra lateral-->
</div><!--/row-->
<!--<a class="left carousel-control" href="#mini-carousel" data-slide="prev">
                                                <span class="setas seta-esquerda">curuzis</span>
                                          </a>-->

<hr>

<footer>
    <p class="pull-right"><a href="index.php">Voltar Inicio</a></p>
    <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
</footer>