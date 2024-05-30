<!-- register-->
<?php
require_once './config/config.php';

// Função para registrar um novo usuário
function register_user($conn, $table, $username, $password) {
    $stmt = $conn->prepare("INSERT INTO $table (username, senha) VALUES (:username, :senha)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':senha', $password);
    return $stmt->execute();
}

// Mensagens de erro/sucesso
$errors = [];
$success = false;

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Validação
    if ($password !== $password_confirm) {
        $errors[] = "As senhas não coincidem.";
    }

    // Verifica o tipo de usuário e define a tabela correspondente
    $tables = [
        2 => 'user_aluno',
        3 => 'user_pais',
        4 => 'user_prof',
        5 => 'user_gestao',
        6 => 'user_func',
        7 => 'user_direns',
        8 => 'user_outro'
    ];

    if (!array_key_exists($user_type, $tables)) {
        $errors[] = "Tipo de usuário inválido.";
    }

    if (empty($errors)) {
        $table = $tables[$user_type];

        $conn = getDBConnection();
        if (register_user($conn, $table, $username, $password)) {
            $success = true;
        } else {
            $errors[] = "Erro ao registrar usuário. Tente novamente.";
        }
    }
}
?>

<!-- register-->

<div class="w3-container">
    <h2>Registro de Novo Usuário</h2>
        <?php if ($success): ?>
            <div class="w3-panel w3-green">
                <p>Usuário registrado com sucesso!</p>
            </div>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
            <div class="w3-panel w3-red">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="register.php" method="POST" class="w3-container w3-card-4 w3-light-grey">
            <p>
                <label for="user_type">Tipo de Usuário</label>
                <select name="user_type" id="user_type" class="w3-select" required>
                    <option value="" disabled selected>Escolha um tipo de usuário</option>
                    <option value="2">Aluno</option>
                    <option value="3">Pais/Responsáveis</option>
                    <option value="4">Professor/Estagiário</option>
                    <option value="5">Gestão</option>
                    <option value="6">Funcionário</option>
                    <option value="7">Diretoria de Ensino</option>
                    <option value="8">Outro</option>
                </select>
            </p>
            <p>
                <label for="username">Nome de Usuário</label>
                <input type="text" name="username" id="username" class="w3-input" required>
            </p>
            <p>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" class="w3-input" required>
            </p>
            <p>
                <label for="password_confirm">Confirme a Senha</label>
                <input type="password" name="password_confirm" id="password_confirm" class="w3-input" required>
            </p>
            <p>
                <button type="submit" class="w3-button w3-blue">Registrar</button>
            </p>
        </form>
    </div>

    <!-- fim register-->
