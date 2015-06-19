<!jonas lindo>
<head>
    <meta charset="utf-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Hege Refsnes">
    <link rel="icon" href="icon/ico1.jpg">
    <script src="js/jquery-1.11.3.js" type="text/javascript"></script>

    <title>LINK2</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/> 
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
</head>

<!--INCLUÃO DO ARQUIVO PAGINA-->
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

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/M1.jpg">
                    </a>
                    <h2>Heading</h2>
                    <p>Camiseta preta. </p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/M2.jpg">
                    </a>
                    <h2>Heading</h2>
                    <p>camisetas malucas </p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/F1.jpg">
                    </a>
                    <h2>Heading</h2>
                    <p>camiseta masculiddddd </p>
                    <p><a class="btn btn-default" href="#" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/F3.jpg">
                    </a>
                    <h2>INFANTIL</h2>
                    <p> lero lero lero </p>
                    <p><a class="btn btn-default" href="INFANTIL.php" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/F4.jpg">
                    </a>
                    <h2>MASCULINO</H2>
                    <p>otima camiseta super estilo </p>
                    <p><a class="btn btn-default" href="MASCULINO.php" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->

                <div class="col-xs-6 col-lg-4">
                    <a href="#" class="thumbnail">
                        <img src="img/F7.jpg">
                    </a>
                    <h2>FEMININO</H2>
                    <p>otima camiseta super estilo </p>
                    <p><a class="btn btn-default" href="FEMININO.php" role="button">Ver Detales &raquo;</a></p>
                </div><!--/.col-xs-6.col-lg-4-->



            </div><!--/row-->
        </div><!--/.col-xs-6.col-sm-9-->
        <div>
            <!--INCLUÃO DO ARQUIVO PAGINA-->
            <?php include ('linkColuna.php'); ?>
        </div>

    </div><!--/.sidebar-offcanvas_barra lateral-->
</div><!--/row-->
<!--<a class="left carousel-control" href="#mini-carousel" data-slide="prev">
                                                <span class="setas seta-esquerda">curuzis</span>
                                          </a>-->
<?php include('./loguin.php'); ?>	
<hr>

<footer>
    <p>&copy; Company 2014</p>
</footer>

</div><!--/.container-->


<!-- Bootstrap core JavaScript

Núcleo Bootstrap JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster
Colocado no final do documento para que as páginas carregam mais rápido-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug
IE10 corte viewport para Superfície / desktop Windows 8 bug-->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="offcanvas.js"></script>


