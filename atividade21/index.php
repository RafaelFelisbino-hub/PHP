<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 21</title>
</head>

<body>
    <h2 style="text-align: center;">Atividade 21</h2>
    <div class="container">
        <div class="row">
            <?php
            require 'class.php';

            echo "<div class='col-4'>";
            echo '<h2>Exercício A</h2>';

            $retangulo = new Retangulo();
            echo "Valor da área = {$retangulo->area(2, 5)}<br>";
            echo "Valor do perímetro = {$retangulo->perimetro(3, 5)}<br>";
            echo "Valor da diagonal = {$retangulo->diagonal(15, 8)}";

            echo "</div>";

            echo "<div class='col-4'>";
            echo '<h2>Exercício B</h2>';

            $produto1 = new Produto();
            $produto1->adicionarProdutos('Fósforo', 0.50, 20);
            echo "<pre>";
            print_r($produto1);
            echo "</pre><br>";

            echo "Valor em estoque: R$ {$produto1->valorTotalEmEstoque()}";
            $produto1->removerProdutos();

            echo "</div>";

            echo "<div class='col-4'>";
            echo '<h2>Exercício C</h2>';

            $professor1 = new Professor();
            $professor1->setTelefone(985967858);
            $professor1->setOculos(true);

            echo "<pre>";
            print_r($professor1);
            echo "</pre>";

            echo "</div>";

            echo "<div class='col-4'>";
            echo '<h2>Exercício D</h2>';

            $aluno1 = new Aluno();
            $aluno1->setEmail('aluno1@aluno.com');
            $aluno1->setCidade('Mangabeiras');
            $aluno1->setStatus(true);

            echo "<pre>";
            print_r($aluno1);
            echo "</pre>";

            echo "</div>";
            ?>
        </div>
    </div>
</body>

</html>