<?php
require_once('../banco/Conexao.php');

$pdo = Conexao::getInstance();

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);
$cnpj = trim( $_POST ['cnpj']);
$telefone = trim($_POST['telefone']);
$endereco = trim($_POST['endereco']);
$cep = trim($_POST['cep']);
$cidade = trim($_POST['cidade']);
$estado = trim($_POST['estado']);
$complemento = trim($_POST['complemento']);
$numero = trim($_POST['numero']);


$sqlEndereco = "INSERT INTO endereco(endereco, cep, cidade, estado, numero, complemento)
                VALUES (:endereco, :cep, :cidade, :estado, :numero, :complemento)";
$stmt = $pdo->prepare($sqlEndereco);
$stmt->execute([
    ':endereco' => $endereco,
    ':cep' => $cep,
    ':cidade' => $cidade,
    ':estado' => $estado,
	':complemento' => $complemento,
	':numero' => $numero
]);

$id_endereco = $pdo->lastInsertId();

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