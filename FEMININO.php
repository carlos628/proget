<?php
$pagina = 'feminino';
require 'inc/common.php';
session_start(); //dd($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Camisetaria Fashion</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Hege Refsnes">
        <link rel="icon" href="icon/ico1.jpg">
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/socialstream.jquery.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-xs-20 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="jumbotron">
                        <h1>Moda Feminina</h1>                           
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="thumbnails list-inline">
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/1013_tam11.gif">
                                    </a>
                                    <h2>Felk Df</h2>
                                    <p>R$ 10.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button"> Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/1132_tam11.gif">
                                    </a>
                                    <h2>Droul</h2>
                                    <p>R$ 5.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/1512_tam11.gif">
                                    </a>
                                    <h2>Lk Hopy</h2>
                                    <p>R$ 11.99 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/2021_tam12_10.jpg">
                                    </a>
                                    <h2>Sweep </h2>
                                    <p>R$ 21.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/2024_tam12_10.jpg">
                                    </a>
                                    <h2>Dhift</h2>
                                    <p>R$ 15.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/1718_tam12_10.jpg">
                                    </a>
                                    <h2>Fly Toog</h2>
                                    <p>R$ 15.00 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/2020_tam12_10.jpg">
                                    </a>
                                    <h2>keep Ghop</h2>
                                    <p>R$ 15.00 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/2025_tam12_10.jpg">
                                    </a>
                                    <h2>Gup </h2>
                                    <p>R$ 14.90</p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/feminino/1512_tam12_10.jpg">
                                    </a>
                                    <h2>Ftoop</h2>
                                    <p>R$ 11.99 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Ver Detales &raquo;</a></p>
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-xs-6.col-sm-9-->
                </div>
                <?php include('./linkColuna.php'); ?>
                <?php include('./header.php'); ?>
            </div>
        </div>
        <hr>
        <footer>
            <p class="pull-right"><a href="index.php">Voltar Inicio</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
        </footer>
    </body>
</html>