<?php
require_once './config/common.php';
?>

<div class="w3-container-fluid pageral">
    <div class="w3-col">

        <div class="w3-row head w3-show">
            <!-- Cabeçalho -->
            <?php include './includes/head/head.php'; ?>
            <!-- Fim do Cabeçalho -->
        </div>

        <div class="w3-row header w3-show">
            <!-- Cabeçalho -->
            <?php include './includes/header/header.php'; ?>
            <!-- Fim do Cabeçalho -->
        </div>

        <div class="w3-row alert w3-hide">
            <!-- Mensagem de Alerta -->
            <?php include './includes/alert/alert.php'; ?>
            <!-- Fim da Mensagem de Alerta -->
        </div>

        <div class="w3-row tema w3-2019-biking-red w3-show">
            <!-- Barra de Tema -->
            <?php include './includes/tema/tema.php'; ?>
            <!-- Fim da Barra de Tema -->
        </div>

        <div class="w3-row navbar w3-2019-biking-red w3-show">
            <!-- Barra de Navegação -->
            <?php include './includes/navbar/navbar.php'; ?>
            <!-- Fim da Barra de Navegação -->
        </div>

        <div class="w3-row main w3-show">
            <!-- Conteúdo Principal -->
            <?php
            // Verifica se o usuário está autenticado
            include 'main_register.php';
            ?>
            <!-- Fim do Conteúdo Principal -->
        </div>

        <div class="w3-row extras w3-hide">
            <!-- Extras -->
            <?php include './includes/extras/slide_placas_turmas.php'; ?>
            <!-- Fim dos Extras -->
        </div>

        <div class="w3-row footer w3-show">
            <!-- Rodapé -->
            <?php include './includes/footer/footer.php'; ?>
            <!-- Fim do Rodapé -->
        </div>

        <div class="w3-row foot w3-show">
            <!-- Rodapé -->
            <?php include './includes/foot/foot.php'; ?>
            <!-- Fim do Rodapé -->
        </div>

    </div>
</div>
