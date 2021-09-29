<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 23</title>
</head>
<body>
    <?php 
        require 'class.php';

        $partida1 = new Partida('Zeus', 'Poseidon', true);
        $time1 = new Time('Zeus', 'Belo Horizonte', 'B', 0, 0, 0, $partida1);
        $time2 = new Time('Poseidon', 'Contagem', 'B', 0, 0, 0, $partida1);

        echo "<div class='flex'>";
        echo '<pre>';
        print_r($time1);
        echo '</pre><br>';
        echo '<pre>';
        print_r($time2);
        echo '</pre><br>';
        echo "</div>";

        echo "<div class='center'>";
        $partida1->marcarPartida('Zeus', 'Poseidon', true);

        echo '<br><br>';

        $partida1->setTimeDaCasa('Zeus');
        $partida1->setTimeVisitante('Poseidon');

        echo $partida1->jogar($time1, $time2);
        echo '<br>';

        echo "Vitórias {$time1->getNome()} = {$time1->getVitorias()}<br>";
        echo "Vitórias {$time2->getNome()} = {$time2->getVitorias()}<br><br>";
        echo "</div>";
    ?>
</body>
</html>