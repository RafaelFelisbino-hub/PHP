<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 15</title>
    <style>
      *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 100%;
            margin: 150px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
        }
        .container input{
            width: 100%;
            clear: both;
            border-radius: 10px;
            border: 1px solid black;
            padding: 5px;
        }
        .formPaciente{
            margin-bottom: 5px;
            padding: 20px 30px 20px 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 50px;
            border-radius: 10px;
        }
        .btnCadastro{
            padding: 7px;
            background-color: rgb(255, 66, 77);
            color: #fff;
            border: 1px solid rgb(255, 66, 77);
            border-radius: 50px;
            cursor: pointer;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="formPaciente">
            <form action="atv15crud.php" method="POST">
                <label for="nomePaciente">Nome:</label>
                <input type="text" name="nomePaciente" id="nomePaciente"><br><br>
                <label for="bairroPaciente">Bairro:</label>
                <input type="text" name="bairroPaciente" id="bairroPaciente"><br><br>
                <label for="cidadePaciente">Cidade:</label>
                <input type="text" name="cidadePaciente" id="cidadePaciente"><br><br>
                <label for="ruaPaciente">Rua:</label>
                <input type="text" name="ruaPaciente" id="ruaPaciente"><br><br>
                <label for="dataNascPaciente">Data nascimento:</label>
                <input type="date" name="dataNascPaciente" id="dataNascPaciente"><br><br>
                <div style="text-align: center;">
                    <button type="submit" class="btnCadastro">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>