<!--navbar-->
<nav class="w3-container navbar w3-panel">
    <!-- Menu principal -->
    <div class="w3-bar w3-black">
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['user_type'] == 'user_aluno'): ?>
                <a href="<?php echo app_url('auth/aluno_dashboard.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Aluno</a>
            <?php elseif ($_SESSION['user_type'] == 'user_prof'): ?>
                <a href="<?php echo app_url('auth/dash_prof.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Professor</a>
            <?php elseif ($_SESSION['user_type'] == 'user_gestao'): ?>
                <a href="<?php echo app_url('auth/dash_gestao.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard da Gestão</a>
            <?php elseif ($_SESSION['user_type'] == 'user_func'): ?>
                <a href="<?php echo app_url('auth/dash_func.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Funcionário</a>
            <?php elseif ($_SESSION['user_type'] == 'user_direns'): ?>
                <a href="<?php echo app_url('auth/dash_direns.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard da Diretoria de Ensino</a>
            <?php elseif ($_SESSION['user_type'] == 'user_outro'): ?>
                <a href="<?php echo app_url('auth/dash_outro.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard</a>
            <?php endif; ?>
            <a href="<?php echo app_url('auth/logout.php'); ?>" class="w3-bar-item w3-button w3-right w3-hover-ranilaranja1">Logout</a>
        <?php else: ?>
            <a href="<?php echo app_url('entrar.php'); ?>" class="w3-bar-item w3-button w3-right w3-hover-ranilaranja1">Entrar</a>
        <?php endif; ?>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium w3-hover-deep-orange" onclick="toggleMenu()">☰</a>
    </div>
    <!-- Menu para telas pequenas -->
    <div id="demo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
        <?php if (isset($_SESSION['user_id'])): ?>
            <?php if ($_SESSION['user_type'] == 'user_aluno'): ?>
                <a href="<?php echo app_url('auth/aluno_dashboard.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Aluno</a>
            <?php elseif ($_SESSION['user_type'] == 'user_prof'): ?>
                <a href="<?php echo app_url('auth/dash_prof.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Professor</a>
            <?php elseif ($_SESSION['user_type'] == 'user_gestao'): ?>
                <a href="<?php echo app_url('auth/dash_gestao.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard da Gestão</a>
            <?php elseif ($_SESSION['user_type'] == 'user_func'): ?>
                <a href="<?php echo app_url('auth/dash_func.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard do Funcionário</a>
            <?php elseif ($_SESSION['user_type'] == 'user_direns'): ?>
                <a href="<?php echo app_url('auth/dash_direns.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard da Diretoria de Ensino</a>
            <?php elseif ($_SESSION['user_type'] == 'user_outro'): ?>
                <a href="<?php echo app_url('auth/dash_outro.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Dashboard</a>
            <?php endif; ?>
            <a href="<?php echo app_url('auth/logout.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Logout</a>
        <?php else: ?>
            <a href="<?php echo app_url('entrar.php'); ?>" class="w3-bar-item w3-button w3-hover-ranilaranja1">Entrar</a>
        <?php endif; ?>
    </div>
</nav>
<!--fim navbar-->
