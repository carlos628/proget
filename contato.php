<?php
$con = newDbConnection();

$sql = $con->prepare('SELECT name, email, contact FROM user');

$sql->execute();
$prod = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
if (count($prod)) {
    foreach ($prod as $cont) {
        ?>
        <div class="col-md-6">
            <div class="thumbnail">              
                <div class="caption">
                    <h4>
                        <?php echo "<b>Nome:</b> " . ($cont['name']); ?>
                    </h4>
                    <h4>
                        <?php echo "<b>Email:</b> " . ($cont['email']); ?>
                    </h4>
                    <h4>
                        <?php echo "<b>Contato:</b> " . ($cont['contact']); ?>
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