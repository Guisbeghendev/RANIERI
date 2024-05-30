<?php
// Configurações do Banco de Dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'x');
define('DB_USER', 'y');
define('DB_PASS', 'z');

// Conectar ao Banco de Dados
function getDBConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        if (defined('APP_DEBUG') && APP_DEBUG) {
            die("Erro de conexão: " . $e->getMessage());
        } else {
            die("Erro de conexão com o banco de dados.");
        }
    }
}

// Iniciar Sessão
session_start();

// Diretórios e Caminhos
define('ROOT_PATH', dirname(__DIR__) . '/');
define('INCLUDES_PATH', ROOT_PATH . 'includes');
define('ASSETS_PATH', ROOT_PATH . 'assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('IMAGES_PATH', ASSETS_PATH . '/images');

// URLs
define('BASE_URL', 'https://e.net.br');
define('CSS_URL', BASE_URL . '/assets/css');
define('JS_URL', BASE_URL . '/assets/js');
define('IMAGES_URL', BASE_URL . '/assets/images');

define('SITE_NAME', 'Escola Prof. José Ranieri');

function app_url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}
?>
