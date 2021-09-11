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
        require_once 'conexao.php';
        $id_medico = $_GET['id_medico'];
        $select = $conn->query("SELECT * FROM medicos WHERE id_medico = '$id_medico';");
        $row = $select->fetch(PDO::FETCH_ASSOC); 
    ?>
    <div class="container">
        <h3 style="margin-bottom: 20px;">Atualizar médico</h3>
        <div class="formPaciente">
            <form action="<?php echo 'update.php?id_medico='.$id_medico ; ?>" enctype="multipart/form-data" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome_medico']; ?>">
                <label for="rua">Rua:</label>
                <input type="text" name="rua" id="rua" value="<?php echo $row['rua_medico']; ?>">
                <label for="numero">Número:</label>
                <input type="text" name="numero" id="numero" value="<?php echo $row['numero_medico']; ?>">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento" value="<?php echo $row['complemento_medico']; ?>">
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro_medico']; ?>">
                <label for="cep">Cep:</label>
                <input type="text" name="cep" id="cep" value="<?php echo $row['cep_medico']; ?>">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email_medico']; ?>">
                <label for="telefoneFixo">Telefone fixo:</label>
                <input type="text" name="telefoneFixo" id="telefoneFixo" value="<?php echo $row['telefone_fixo_medico']; ?>">
                <label for="celular">Celular:</label>
                <input type="text" name="celular" id="celular" value="<?php echo $row['telefone_celular_medico']; ?>">
                <label for="telefoneSecundario">Telefone secundário:</label>
                <input type="text" name="telefoneSecundario" id="telefoneSecundario" value="<?php echo $row['telefone_secundario_medico']; ?>">
                <div style="text-align: center;">
                    <button type="submit" class="btnCadastro">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>