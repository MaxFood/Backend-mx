<?php
// Inclui o arquivo que contém a classe Conexao
require_once 'Conexao.php'; // Substitua pelo caminho correto se necessário

// Tenta obter uma instância da conexão
try {
    $pdo = Conexao::getInstance();
    
    // Verifica se a conexão foi bem-sucedida
    if ($pdo) {
        echo "Conexão estabelecida com sucesso!<br>";
    } else {
        echo "Falha ao estabelecer conexão.";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}