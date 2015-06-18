<nav class="navbar navbar-fixed-top navbar-inverse">
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
                <li class="<?= ($pagina == 'home' ? 'active' : '') ?>"><a href="index.php">HOME</a></li>
                <li class="<?= ($pagina == 'masculino' ? 'active' : '') ?>"><a href="MASCULINO.php">MASCULINO</a></li>
                <li class="<?= ($pagina == 'feminino' ? 'active' : '') ?>"><a href="FEMININO.php">FEMININO</a></li>
                <li class="<?= ($pagina == 'infantil' ? 'active' : '') ?>"><a href="INFANTIL.php">INFANTIL</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
