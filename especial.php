<?php
$pagina = 'especial';
require 'inc/common.php';
session_start();
//dd($_SESSION);
?>
<head>
    <meta charset="utf-16">
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
    <?php
    include('navbar.php');
    include('header.php');
    ?>
</head>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/F18.jpg" alt="0">
            <div class="carousel-caption">
                <h1>FEMININO</h1>
                <p>muito fashiom</p>
            </div>
        </div>
        <div class="item">
            <img src="img/02.jpg" alt="1">
            <div class="carousel-caption">
                <h1>FEMININO</h1>
                <p>muito fashiom</p>
            </div>
        </div>
        <div class="item">
            <img src="img/03.jpg" alt="2">
            <div class="carousel-caption">
                <h1>FEMININO</h1>
                <p>muito fashiom</p>
            </div>
        </div>
        <div class="item">
            <img src="img/05.jpg" alt="3">
            <div class="carousel-caption">
                <h1>MASCULINO</h1>
                <p>MASCULO</p>
            </div>
        </div>
        <div class="item">
            <img src="img/masculino/1632_tam12_1.jpg" alt="4">
            <div class="carousel-caption">
                <h1>MEGA MASCULINO</h1>
                <p>SUPER CAMISETA</p>
            </div>
        </div>
        <div class="item">
            <img src="img/infantil/1465_tam12_3.jpg" alt="5">
            <div class="carousel-caption">
                <h1>INFANTIL</h1>
                <p>SUPER DELICADO</p>
            </div>
        </div>
        <div class="item">
            <img src="img/infantil/1474_tam12_3.jpg" alt="6">
            <div class="carousel-caption">
                <h1>INFANTIL</h1>
                <p>LEGAL</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>