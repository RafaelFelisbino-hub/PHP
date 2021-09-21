<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 19</title>
</head>

<body>
    <div style="text-align: center;">
        <h3>Atividade 19</h3><br>
    </div>
    <div class="container">
        <div class="row">
            <?php
            require 'classes.php';

            $cerveja1 = new Cerveja();
            $cerveja1->addCerveja('Serramalte', '5.5%');

            echo "<div class='col-4'>";
            echo '<pre>';
            print_r($cerveja1);
            echo '</pre>';
            echo "</div class='col-4'>";

            $bicicleta1 = new Bicicleta();
            $bicicleta1->addBicicleta('Caloi 10', 'Caloi');

            echo "<div class='col-4'>";
            echo '<pre>';
            print_r($bicicleta1);
            echo '</pre>';
            echo "</div class='col-4'>";

            $vga1 = new Vga();
            $vga1->addVga('GTX 960', '4GB');

            echo "<div class='col-4'>";
            echo '<pre>';
            print_r($vga1);
            echo '</pre>';
            echo "</div class='col-4'>";
            ?>
        </div>

    </div>
</body>

</html>