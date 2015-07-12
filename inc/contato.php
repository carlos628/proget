<?php
$con = newDbConnection();

$sql = $con->prepare('SELECT name, numero FROM contato');

$sql->execute();
$prod = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
if (count($prod)) {
    foreach ($prod as $cont) {
        ?>
        <div class="col-md-4">
            <div class="thumbnail">              
                <div class="caption">
                    <h4>
                        <?php echo ($cont['name']); ?>
                    </h4>
                    <h4>
                        <?php echo ($cont['numero']); ?>
                    </h4>

                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo '<h3>Nenhum contato encontrado.</h3>';
}
?>