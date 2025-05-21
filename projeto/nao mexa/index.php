<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Usuário</title>
</head>
<body>
  <h2>Cadastro de Usuário</h2>
  <form action="cadastro.php" method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <label>Data de Nascimento:</label><br>
    <input type="date" name="dataNascimento" required><br><br>

    <label>CPF:</label><br>
    <input type="text" name="cpf" required><br><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" required><br><br>

    <label>Rua:</label><br>
    <input type="text" name="rua" required><br><br>
    <label>Número:</label><br>
    <input type="text" name="numero" required><br><br>
    
    <label>Complemento:</label><br>
    <input type="text" name="complemento"><br><br>

    <label>Endereço:</label><br>
    <input type="text" name="endereco" required><br><br>

    <label>CEP:</label><br>
    <input type="text" name="cep" required><br><br>

    <label>Cidade:</label><br>
    <input type="text" name="cidade" required><br><br>

    <label>Estado:</label><br>
    <input type="text" name="estado" required><br><br>

    <button type="submit">Cadastrar</button>
  </form>
</body>
</html>