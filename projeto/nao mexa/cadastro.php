<?php
require_once('../banco/Conexao.php');

$pdo = Conexao::getInstance();
if (!$pdo) {
    echo "Falha ao conectar ao banco de dados.";
    exit;
}

// Dados do formulário
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);
$dataNascimento = trim($_POST['dataNascimento']);
$cpf = trim($_POST['cpf']);
$telefone = trim($_POST['telefone']);

$cep = trim($_POST['cep']);
$cidade = trim($_POST['cidade']);
$estado = trim($_POST['estado']);
$endereco = trim($_POST['endereco']);
$complemento = trim($_POST['complemento']);
$numero = trim($_POST['numero']);


$sql = "SELECT COUNT(*) AS total FROM usuario WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

$sqlEndereco = "INSERT INTO endereco (endereco, cep, cidade, estado, numero, complemento)
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

$idEndereco = $pdo->lastInsertId();

$sqlUsuario = "INSERT INTO usuario (nome, email, senha, dataNascimento, cpf, telefone, id_endereco)
               VALUES (:nome, :email, :senha, :dataNascimento, :cpf, :telefone, :id_endereco)";
$stmt = $pdo->prepare($sqlUsuario);
$stmt->execute([
    ':nome' => $nome,
    ':email' => $email,
    ':senha' => $senha,
    ':dataNascimento' => $dataNascimento,
    ':cpf' => $cpf,
    ':telefone' => $telefone,
    ':id_endereco' => $idEndereco
]);

