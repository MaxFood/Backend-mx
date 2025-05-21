<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Loja</title>
</head>
<body>
    <h1>Cadastro de Loja</h1>
    <form action="Cadastro_loja.php" method="POST">
        <h2>Dados da Loja</h2>
        <label>Nome da Loja:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <label>CNPJ:</label><br>
        <input type="text" name="cnpj" required><br><br>

        <label>Telefone:</label><br>
        <input type="text" name="telefone" required><br><br>

        <h2>Endereço</h2>
        <label>Endereço:</label><br>
        <input type="text" name="endereco" required><br><br>

        <label>CEP:</label><br>
        <input type="text" name="cep" required><br><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" required><br><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" required><br><br>

        <label>Número:</label><br>
        <input type="text" name="numero" required><br><br>

        <label>Complemento:</label><br>
        <input type="text" name="complemento"><br><br>

        <input type="submit" value="Cadastrar Loja">
    </form>
</body>
</html>
