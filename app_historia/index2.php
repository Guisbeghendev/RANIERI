<?php
require_once '../config/common.php'; // Inclui o arquivo common.php a partir do diretório pai
require_once __DIR__ . '/config/config.php'; // Inclui o arquivo config.php específico do app
?>

<div class="w3-container-fluid pageral">
    <div class="w3-col">

        <!-- Seções principais -->
        <div class="w3-row head w3-show"><!-- nao tirar -->
            <!--head-->
            <?php include INCLUDES_PATH . '/head/head.php'; ?>
            <!--fim head-->
        </div>

        <div class="w3-row header w3-show"><!-- nao tirar -->
            <!--header-->
            <?php include INCLUDES_PATH . '/header/header.php'; ?>
            <!--fim header-->
        </div>

        <div class="w3-row alert w3-hide">
            <!--msg alert-->
            <?php include INCLUDES_PATH . '/alert/alert.php'; ?>
            <!--fim msg alert-->
        </div>

        <div class="w3-row tema w3-hide">
            <!--barra tema-->
            <?php include INCLUDES_PATH . '/tema/tema.php'; ?>
            <!--fim barra tema-->
        </div>

        <div class="w3-row navbar w3-show"><!-- nao tirar -->
            <!--navbar-->
            <?php include INCLUDES_PATH . '/navbar/navbar.php'; ?>
            <!--fim navbar-->
        </div>

        <div class="w3-row main w3-show"><!-- mudar apenas aqui -->
            <!--main-->
            <?php include 'main_historia3.php'; ?>
            <!--fim main-->
        </div>

        <div class="w3-row extras w3-hide">
            <!--extras-->
            <?php include INCLUDES_PATH . '/extras/slide_placas_turmas.php'; ?>
            <!--fim extras-->
        </div>

        <div class="w3-row footer w3-show"><!-- nao tirar -->
            <!--footer-->
            <?php include INCLUDES_PATH . '/footer/footer.php'; ?>
            <!--fim footer-->
        </div>

        <div class="w3-row foot w3-show"><!-- nao tirar -->
            <!--footer-->
            <?php include INCLUDES_PATH . '/foot/foot.php'; ?>
            <!--fim footer-->
        </div>

    </div>
</div>
