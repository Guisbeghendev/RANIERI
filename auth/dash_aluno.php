<!-- dash aluno-->
<?php
require_once './config/auth_check.php';

// Verifica se o usuário é do tipo 'user_aluno'
if ($_SESSION['user_type'] !== 'user_aluno') {
    header("Location: login.php");
    exit();
}
?>

<!-- dash aluno-->

    <div class="w3-container">
        <h2>Bem-vindo, <?php echo $_SESSION['username']; ?></h2>
        <p>Este é o seu painel de controle.</p>
        <!-- Conteúdo específico para alunos -->
        <a href="logout.php" class="w3-button w3-red">Logout</a>
    </div>

<!-- fim dash aluno-->