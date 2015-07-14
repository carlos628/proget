<?php
require 'inc/common.php';
session_start(); //dd($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAMISETARIA</title>
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
        <div class="container" style="padding-bottom: 20px">
            <div class="row row-offcanvas row-offcanvas-right">                
                <div class="col-xs-20 col-sm-9">
                    <?php include('header.php'); ?>
                    <?php include('linkColuna.php'); ?>
                    <div class="col-md-7 column">
                        <div class="row">
                            <?php getBodyContent(); ?>
                        </div>
                    </div>
                </div>
            </div><!--/.col-xs-6.col-sm-9-->
        </div>
        <hr>
        <footer>
            <p class="pull-right"><a href="index.php">Voltar Inicio</a></p>
            <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
        </footer>
    </body>
</html>