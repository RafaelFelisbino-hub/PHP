<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 22</title>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Atividade 22</h2>
        <div class="row">
            <?php 
                require 'class.php';

                echo "<div class='col-4'>";
                $cliente1 = new contaCorrente();
                $cliente1->abrirConta('Rafael Silva', 'Corrente', false, false, 1445, 300, true);

                echo "<pre>";
                print_r($cliente1);
                echo "</pre>";
                echo "</div>";

                echo "<div class='col-4'>";
                echo $cliente1->depositar(500);
                echo "</div>";

                echo "<div class='col-4'>";
                echo $cliente1->encerrarConta(false);
                echo "</div>";

                echo "<div class='col-4'>";
                echo $cliente1->sacar(200);
                echo "</div>";

                echo "<div class='col-4'>";
                echo $cliente1->tarifaMensal(true);
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>