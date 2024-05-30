<?php
// Diretórios e Caminhos
define('ROOT_PATH', __DIR__ . '/../');
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

// URLs dos aplicativos
define('APP_HISTORIA_URL', BASE_URL . '/app_historia');

// Configurações do Aplicativo
define('APP_ENV', 'development'); // 'development' ou 'production'
define('APP_DEBUG', APP_ENV === 'development'); // Debug ativo apenas em desenvolvimento

// Nome do Site
define('SITE_NAME', 'Escola');

// Configurações do Banco de Dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'x');
define('DB_USER', 'y');
define('DB_PASS', 'z');

// Iniciar Sessão
session_start();

// Configurações de Erro
if (APP_ENV === 'development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);
}

// Conectar ao Banco de Dados
function getDBConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        if (APP_DEBUG) {
            die("Erro de conexão: " . $e->getMessage());
        } else {
            die("Erro de conexão com o banco de dados.");
        }
    }
}

// Funções Comuns
function app_url($path = '') {
    return BASE_URL . '/' . ltrim($path, '/');
}

function asset_url($path = '') {
    return BASE_URL . '/assets/' . ltrim($path, '/');
}

function app_historia_url($path = '') {
    return APP_HISTORIA_URL . '/' . ltrim($path, '/');
}

// Função para debug
function debug($data) {
    if (APP_DEBUG) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
?>
