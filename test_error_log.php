<?php
// Habilitar exibição de erros diretamente no PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Habilitar log de erros
ini_set('log_errors', 1);
ini_set('error_log', '/home/u173063727/domains/escolajoseranieri.net.br/public_html/error_logs/php_errors.log');

// Gerar um erro
echo $undefined_variable;
?>
