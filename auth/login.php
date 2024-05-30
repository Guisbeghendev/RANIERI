<!-- login-->
<?php
require_once './config/config.php';

// Função para verificar o login do usuário
function login_user($conn, $username, $password) {
    // Verifica em todas as tabelas de usuários
    $tables = [
        'user_aluno' => 'id_aluno',
        'user_pais' => 'id_pais',
        'user_prof' => 'id_prof',
        'user_gestao' => 'id_gestao',
        'user_func' => 'id_func',
        'user_direns' => 'id_direns',
        'user_outro' => 'id_outro'
    ];

    foreach ($tables as $table => $id_column) {
        $stmt = $conn->prepare("SELECT * FROM $table WHERE username = :username AND senha = :senha");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':senha', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $user['table'] = $table;
            $user['id_column'] = $id_column;
            return $user;
        }
    }
    return false;
}

// Mensagens de erro/sucesso
$errors = [];

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validação
    if (empty($username) || empty($password)) {
        $errors[] = "Nome de usuário e senha são obrigatórios.";
    } else {
        // Tenta logar o usuário
        $conn = getDBConnection();
        $user = login_user($conn, $username, $password);

        if ($user) {
            // Inicia a sessão e armazena as informações do usuário
            session_start();
            $_SESSION['user_id'] = $user[$user['id_column']];
            $_SESSION['user_type'] = $user['table'];
            $_SESSION['username'] = $username;

            // Redireciona para a dashboard correta
            switch ($user['table']) {
                case 'user_aluno':
                    header("Location: aluno_dashboard.php");
                    break;
                case 'user_pais':
                    header("Location: pais_dashboard.php");
                    break;
                case 'user_prof':
                    header("Location: prof_dashboard.php");
                    break;
                case 'user_gestao':
                    header("Location: gestao_dashboard.php");
                    break;
                case 'user_func':
                    header("Location: func_dashboard.php");
                    break;
                case 'user_direns':
                    header("Location: direns_dashboard.php");
                    break;
                case 'user_outro':
                    header("Location: outro_dashboard.php");
                    break;
                default:
                    $errors[] = "Tipo de usuário desconhecido.";
            }
            exit();
        } else {
            $errors[] = "Nome de usuário ou senha incorretos.";
        }
    }
}
?>

<!-- login-->

<div class="w3-container">
        <h2>Login</h2>
        <?php if (!empty($errors)): ?>
            <div class="w3-panel w3-red">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" class="w3-input" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" class="w3-input" required>
            <button type="submit" class="w3-button w3-green">Login</button>
        </form>
    </div>


<!-- fim login-->