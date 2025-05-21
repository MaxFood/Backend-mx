<?php
require_once 'Conexao.php'; 

try {
    $pdo = Conexao::getInstance();
    
    if ($pdo) {
        echo "Conexão estabelecida com sucesso!<br>";
    } else {
        echo "Falha ao estabelecer conexão.";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}