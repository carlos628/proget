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
                    <li class="<?= ($pagina == 'home' ? 'active' : '') ?>"><a href="index.php">Home</a>
                    <li class="<?= ($pagina == 'masculino' ? 'active' : '') ?>"><a href="MASCULINO.php">Masculino</a>
                    <li class="<?= ($pagina == 'feminino' ? 'active' : '') ?>"><a href="FEMININO.php">Feminino</a>
                    <li class="<?= ($pagina == 'infantil' ? 'active' : '') ?>"><a href="INFANTIL.php">Infantil</a>                

                        <?php if (!empty($_SESSION['user']['id'])) { ?>
                        <li class="<?php echo $_GET['p'] == 'produtos' ? 'active' : '' ?>"><a href="tudo.php?p=produtos">Produtos</a>
                        <li class="<?php echo $_GET['p'] == 'contato' ? 'active' : '' ?>"><a href="tudo.php?p=contato">Contato</a>
                        <li class="<?php echo $_GET['p'] == 'user-form' ? 'active' : '' ?>"><a href="tudo.php?p=user-form">Gerenciar Usuarios</a>
                        <li class="<?php echo $_GET['p'] == 'product-form' ? 'active' : '' ?>"><a href="tudo.php?p=product-form">Gerenciar Produtos</a>
                        <li class="<?php echo $_GET['p'] == 'especial' ? 'active' : '' ?>"><a href="especial.php?p=especial">especial</a> 
                        <?php } ?>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div>
<hr>