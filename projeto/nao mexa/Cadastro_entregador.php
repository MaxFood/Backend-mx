<?php
require_once('../banco/Conexao.php');

$pdo = Conexao::getInstance();

$veiculo = trim($_POST['veiculo']);
$status = trim($_POST['status']);
$placa = trim( $_POST ['placa']);

$sqlEntregador= "INSERT INTO entregador(veiculo, status, placa)
                VALUES (:veiculo, :status, :placa)";
$stmt = $pdo->prepare($sqlEntregador);
$stmt->execute([
    ':veiculo' => $veiculo,
    ':status' => $status,
    ':placa' => $placa,
]);


$sqlLoja =  "INSERT INTO loja (nome_loja, email, senha, cnpj, telefone, id_endereco) 
        values (:nome_loja, :email, :senha, :cnpj, :telefone , :id_endereco)";
$stmt = $pdo->prepare($sqlLoja);
$stmt->execute([
    ':nome_loja' => $nome,
    ':email' => $email,
    ':senha' => $senha,
    ':cnpj' => $cnpj,
    ':telefone' => $telefone,
    ':id_endereco' => $id_endereco
]); 