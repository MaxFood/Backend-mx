<?php
require_once('../banco/Conexao.php');
 $pdo = Conexao::getInstance();

session_start();
if (!$pdo) {
    echo "Falha ao conectar ao banco de dados.";
    exit;
}

class Login{

    Function login ($email, $senha){
        $pdo = Conexao::getInstance();
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
                 
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && password_verify($senha, $result['senha'])) {
           return $result; } 
           else {
            return false; 
        }
        
    }

    function loginLoja($cnpj, $senha){
        $pdo = Conexao::getInstance();
        $sql = "SELECT * FROM loja WHERE cnpj = :cnpj";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->execute();
                 
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && password_verify($senha, $result['senha'])) {
           return $result; } 
           else {
            return false; 
        }
        
    }

    function logout() {
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
}