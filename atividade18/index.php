<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 18</title>
</head>
<body>
    <?php
        require 'classCelular.php';

        $celular1 = new Celular();
        $celular1->novoCelular('a20s','Samsumg',1000);

        foreach($celular1 as $key => $value){
            echo $key." = ".$value."<br />";
        }
    ?>
</body>
</html>