<?php
// Caminho para o arquivo common.php
require_once dirname(__DIR__, 2) . '/config/common.php';

// Configurações Específicas do App Historia
define('APP_HISTORIA', 'História da Escola');
define('APP_HISTORIA_DESCRIPTION', 'Este aplicativo exibe a história da Escola.');

// URLs específicas do aplicativo de história
define('APP_HISTORIA_BASE_URL', BASE_URL . '/app_historia');
define('APP_HISTORIA_CSS_URL', APP_HISTORIA_BASE_URL . '/css'); // ajuste aqui conforme sua estrutura de pastas
define('APP_HISTORIA_JS_URL', APP_HISTORIA_BASE_URL . '/js'); // ajuste aqui conforme sua estrutura de pastas
define('APP_HISTORIA_IMAGES_URL', APP_HISTORIA_BASE_URL . '/assets/images'); // ajuste aqui conforme sua estrutura de pastas


// Configurações do banco de dados para o aplicativo de história (se aplicável)
// define('APP_HISTORIA_DB_HOST', 'localhost');
// define('APP_HISTORIA_DB_NAME', 'app_historia_db');
// define('APP_HISTORIA_DB_USER', 'usuario_db');
// define('APP_HISTORIA_DB_PASS', 'senha_db');

// Outras configurações específicas do aplicativo de história...

?>
