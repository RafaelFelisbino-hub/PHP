<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 20</title>
</head>

<body>
    <h2 style="text-align: center;">Atividade 20</h2>
    <div class="container">
        <div class="row">
            <div class="objeto">
                <?php
                require 'class.php';

                $produto1 = new Produto();
                $produto1->descricao = 'Caixa de Fósforo';
                $produto1->quantidade = 20;
                $produto1->valor = 0.50;

                echo '<pre>';
                print_r($produto1);
                echo '</pre>';
                ?>
            </div>
        </div>
    </div>
</body>

</html>