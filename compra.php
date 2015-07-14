<?php
$pagina = 'home';
require 'inc/common.php';
session_start(); //dd($_SESSION);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Hege Refsnes">
    <meta name="author" content="index.php">
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
    <title>super |  Camisetas!</title>
    
</head>
<?php include('navbar.php'); ?>


<hr>
<hr>

<main role="main">
    <div class="container catalogo">

        <div class="row slc-filtro selectboxitcontainer" style="visibility:hidden">
        </div>
    </div>
    <div id="ctl00_Content_itemContent" class="divLoadData container">
        <div class="row shirts row-shirts">

            <div class="col-xs-6 col-sm-6 col-md-3 shirt">
                <div class="pic">
                    <center><p>Camiseta Nike sports</p></center>


                    <a href="tudo.php?usr=jonas"> 
                        <img class="poster" src="img/1482_tam12_1.jpg">  
                    </a>
                </div>
                <div class="author">
                    <span class="name-stamp">
                        <a href="index.php?usr=jonas"></a>
                    </span>
                    <span class="name-by"> <a href="index.php?usr=jonas"></a>
                    </span>
                    <div class="pricing">

                        <span class="name-by"> <a href="index.php?usr=jonas"></a>
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 shirt">
                <div class="pic">
                    <p>Nike Sports</p>
                    <span class="regular"> Nike Sports</span>
                    <span class="price">R$ 9,90</span>

                    </a>
                </div>
                <div class="author">
                    <span class="name-stamp">
                        <a href="product.aspx?pid=2023"></a>
                    </span>
                    <span class="name-by"> <a href="profile.aspx?usr=artcarvalho"></a>
                    </span>
                    <div class="pricing">

                        <span class="name-by"> <a href="profile.aspx?usr=artcarvalho"></a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
</div>
<div class="row load">
    <span id="noResultLabel">
    </span>

</div>
</div>
</main>

<footer>

    <p>&copy; 2015 Company, Inc. &middot; <a href="privacy.php">Privacy</a> &middot; <a href="termo.php">Termo de uso</a></p>
</footer>