<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atividade17.css">
    <title>Cadastrar</title>
</head>
<body>
    <nav>
        <ul class="navbar">
            <a href="index.php">
                <li>Cadastrar</li>
            </a>
            <a href="consultar.php">
                <li>Consultar</li>
            </a> 
        </ul>
    </nav>
    <?php
        $id_medico = $_GET['id_medico']; 
    ?>
    <div class="container">
        <h3 style="margin-bottom: 20px;">Atualizar médico</h3>
        <div class="formPaciente">
            <form action="<?php echo 'update.php?id_medico='.$id_medico ; ?>" enctype="multipart/form-data" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro">
                <label for="cep">Cep:</label>
                <input type="text" name="cep" id="cep">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
                <label for="telefoneFixo">Telefone fixo:</label>
                <input type="text" name="telefoneFixo" id="telefoneFixo">
                <label for="celular">Celular:</label>
                <input type="text" name="celular" id="celular">
                <label for="telefoneSecundario">Telefone secundário:</label>
                <input type="text" name="telefoneSecundario" id="telefoneSecundario">
                <div style="text-align: center;">
                    <button type="submit" class="btnCadastro">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>