<?php
$pagina = 'home';
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
                        <h1>CAMISETARIA FASHION</h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="thumbnails list-inline">
                                <li class="span4">
                                    <a href="imagen_home_1.php" class="thumbnail">
                                        <img src="img/1482_tam12_1.jpg">
                                    </a>
                                    <h2>Nike Sports</h2>
                                    <p> R$ 9.90 </p>
                                    <p><a class="btn btn-default" href="compra.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_2.php" class="thumbnail">
                                        <img src="img/1842_tam12_1.jpg">
                                    </a>
                                    <h2>Zap Lock</h2>
                                    <p>R$ 16.90 </p>
                                    <p><a class="btn btn-default" href="magen_home_2.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_3.php" class="thumbnail">
                                        <img src="img/2022_tam12_1.jpg">
                                    </a>
                                    <h2>Olympicos</h2>
                                    <p>R$ 26.90 </p>
                                    <p><a class="btn btn-default" href="imagen_home_3.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_4.php" class="thumbnail">
                                        <img src="img/feminino/1783_tam12_5.jpg">
                                    </a>
                                    <h2>Slyp Look</h2>
                                    <p>R$ 15.90 </p>
                                    <p><a class="btn btn-default" href="imagen_home_4.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_5.php" class="thumbnail">
                                        <img src="img/feminino/1817_tam12_10.jpg">
                                    </a>
                                    <h2>Ghop Keep</h2>
                                    <p>18.50 </p>
                                    <p><a class="btn btn-default" href="imagen_home_5.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_6.php" class="thumbnail">
                                        <img src="img/feminino/2022_tam12_10.jpg">
                                    </a>
                                    <h2>Hot Kell</h2>
                                    <p>R$ 9.90 </p>
                                    <p><a class="btn btn-default" href="imagen_home_6.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_7.php" class="thumbnail">
                                        <img src="img/infantil/1996_tam12_3.jpg">
                                    </a>
                                    <h2>Baby flok</h2>
                                    <p>R$ 6.90 </p>
                                    <p><a class="btn btn-default" href="imagen_home_7.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_8.php" class="thumbnail">
                                        <img src="img/infantil/1999_tam12_3.jpg">
                                    </a>
                                    <h2>Chok Nhell</h2>
                                    <p>R$ 10.90 </p>
                                    <p><a class="btn btn-default" href="imagen_home_8.php" role="button">Comprar &raquo;</a></p>
                                </li>
                                <li class="span4">
                                    <a href="imagen_home_9.php" class="thumbnail">
                                        <img src="img/infantil/1631_tam12_3.jpg">
                                    </a>
                                    <h2>Roop Delf</h2>
                                    <p> R$ 18.50 </p>
                                    <p><a class="btn btn-default" href="imagen_home_9.php" role="button">Comprar &raquo;</a></p>
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-xs-6.col-sm-9-->
                </div>
                <?php include('linkColuna.php'); ?>
                <?php include('header.php'); ?>
            </div>
        </div>
        <hr>
        <footer>
            <p class="pull-right"><a href="index.php">Voltar Inicio</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
        </footer>
    </body>
</html>