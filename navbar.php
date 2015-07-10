<div><nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--<a class="navbar-brand" href="index.php">HOME</a>-->
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?= ($pagina == 'home' ? 'active' : '') ?>"><a href="index.php">HOME</a>
                    <li class="<?= ($pagina == 'masculino' ? 'active' : '') ?>"><a href="MASCULINO.php">MASCULINO</a>
                    <li class="<?= ($pagina == 'feminino' ? 'active' : '') ?>"><a href="FEMININO.php">FEMININO</a>
                    <li class="<?= ($pagina == 'infantil' ? 'active' : '') ?>"><a href="INFANTIL.php">INFANTIL</a>
                    
                    <li class="<?= ($pagina == 'especial' ? 'active' : '') ?>"><a href="especial.php">especial</a> 
                    <li class="<?= ($pagina == 'product' ? 'active' : '') ?>"><a href="product.php">produto</a>  

                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>
<hr>