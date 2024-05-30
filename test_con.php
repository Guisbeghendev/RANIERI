<?php
require_once 'config/common.php';

try {
    $conn = getDBConnection();
    echo "Conexão com o banco de dados estabelecida com sucesso.";
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>