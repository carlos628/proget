<?php
$pagina = 'masculino';
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
                        <h1>Moda Masculina</h1>                           
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="thumbnails list-inline">
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M17.jpg">
                                    </a>
                                    <h2>Fly</h2>
                                    <p>R$ 26.00 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M11.jpg">
                                    </a>
                                    <h2>Joop</h2>
                                    <p>R$ 18.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M14.jpg">
                                    </a>
                                    <h2>Hering</h2>
                                    <p>17.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M8.jpg">
                                    </a>
                                    <h2>Hoop Flr</h2>
                                    <p>R$ 18.99</p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M1.jpg">
                                    </a>
                                    <h2>Lk Fil</h2>
                                    <p>R$ 25.99 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/M7.jpg">
                                    </a>
                                    <h2>Ful</h2>
                                    <p>R$ 12.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/1482_tam12_1.jpg">
                                    </a>
                                    <h2>Fp Hok</h2>
                                    <p>R$ 9.90 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/1842_tam12_1.jpg">
                                    </a>
                                    <h2>GB Git</h2>
                                    <p>R$ 20.99 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="#" class="thumbnail">
                                        <img src="img/1916_tam12_1.jpg">
                                    </a>
                                    <h2>Poou Hop</h2>
                                    <p>R$ 25.00 </p>
                                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Comprar &raquo;</a></p>
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