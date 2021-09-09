<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atividade16.css">
    <title>Consultar</title>
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
        <h3 style="margin-bottom: 20px;">Consultar</h3>
        <div class="formPaciente">
            <form action="./CRUD/consultar.php" method="POST">
                <label for="usuarioPessoa">Usuário:</label>
                <input type="text" name="usuarioPessoa" id="usuarioPessoa"><br><br>
                <div style="text-align: center;">
                    <button type="submit" class="btnCadastro">Consultar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>