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
    <div class="container">
        <h3 style="margin-bottom: 30px;">Médicos cadastrados</h3>
        <div class="tabela">
            <table>
                <tr>
                    <th>NOME</th>
                    <th>RUA</th>
                    <th>NÚMERO</th>
                    <th>COMPLEMENTO</th>
                    <th>BAIRRO</th>
                    <th>CEP</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th>CELULAR</th>
                    <th>2ºTELEFONE</th>
                </tr>
                <?php
                    require 'conexao.php';

                    $select = $conn->query("SELECT * FROM medicos ORDER BY id_medico;");
                    $res = $select->fetchAll(PDO::FETCH_ASSOC);

                    foreach($res as $valor){
                        echo "<tr>";
                        echo "<td>".$valor['nome_medico']."</td>";
                        echo "<td>".$valor['rua_medico']."</td>";
                        echo "<td>".$valor['numero_medico']."</td>";
                        echo "<td>".$valor['complemento_medico']."</td>";
                        echo "<td>".$valor['bairro_medico']."</td>";
                        echo "<td>".$valor['cep_medico']."</td>";
                        echo "<td>".$valor['email_medico']."</td>";
                        echo "<td>".$valor['telefone_fixo_medico']."</td>";
                        echo "<td>".$valor['telefone_celular_medico']."</td>";
                        echo "<td>".$valor['telefone_secundario_medico']."</td>";
                        echo "<td><a href='atualizar.php?id_medico=".$valor['id_medico']."'>Atualizar</a></td>";
                        echo "<td><a href='deletar.php?id_medico=".$valor['id_medico']."'>Deletar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>