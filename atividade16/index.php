<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atividade16.css">
    <title>Cadastrar</title>
</head>
<body>
    <nav>
        <ul class="navbar">
            <a href="index.php">
                <li>Cadastrar</li>
            </a>
            <a href="update.php">
                <li>Atualizar</li>
            </a>
            <a href="delete.php">
                <li>Deletar</li>
            </a>
            <a href="select.php">
                <li>Consultar</li>
            </a> 
        </ul>
    </nav>
    <div class="container">
        <h3 style="margin-bottom: 20px;">Cadastrar</h3>
        <div class="formPaciente">
            <form action="./CRUD/cadastrar.php" method="POST">
                <label for="usuarioPessoa">Usuário:</label>
                <input type="text" name="usuarioPessoa" id="usuarioPessoa"><br><br>
                <label for="nomePessoa">Nome:</label>
                <input type="text" name="nomePessoa" id="nomePessoa"><br><br>
                <label for="telefonePessoa">Telefone:</label>
                <input type="text" name="telefonePessoa" id="telefonePessoa"><br><br>
                <label for="emailPessoa">E-mail:</label>
                <input type="email" name="emailPessoa" id="emailPessoa"><br><br>
                <div style="text-align: center;">
                    <button type="submit" class="btnCadastro">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>