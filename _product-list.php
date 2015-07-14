<?php
$con = newDbConnection();

$sql = $con->prepare('SELECT id, name, description, picture, price FROM product WHERE stock > 0');

$sql->execute();
$products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
if (count($products)) {
    foreach ($products as $product) {
        ?>
        <html>

            <body>
                <div class="col-lg-9 col-lg-9 ">
                    <div class="btn-sm">
                        <div class="thumbnail">
                            <img alt="" src="uploads/<?php echo $product['picture']; ?>">

                            <div class="caption">
                                <h4>
                                    <?php echo utf8_encode($product['name']); ?>
                                </h4>

                                <p>
                                    <?php echo utf8_encode($product['description']); ?>
                                </p>

                                <p>
                                    <span
                                        class="label label-warning">R$ <?php echo number_format($product['price'], 2, ',', ''); ?></span>
                                </p>

                                <p>
                                    <a class="btn btn-success btn-sm"
                                       href="tudo.php?p=product-buy&product-id=<?php echo $product['id']; ?>">Comprar</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<h3>Nenhum produto encontrado.</h3>';
        }
        ?>
    </body>
</html>