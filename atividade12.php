<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .questoes{
            border: 1px solid black;
            width: clamp(200px, 500px, 500px);
            text-align: center;
            margin-bottom: 5px;
        }
        button{
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
    <div class="questoes">
        <h3>1) Use array com construtor</h3>
        <h4>Efetuar tabuada de 1 a 10 de acordo com valor informado:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Número: <input type="number" name="numeroTabuada" id="numeroTabuadaId"><br><br>
            <button type="submit">Resultado</button>
        </form>
        <?php
           if(isset($_POST['numeroTabuada'])){
            $array[10] = array();
            for($i = 1; $i <= 10; $i++){
                $array[$i] = $_POST['numeroTabuada'];
                $array[$i] *= $i;

                printf("Posição %u = %u<br>",$i, $array[$i]);
            }
        }
        ?>
    </div>
    <div class="questoes">
        <h3>2) Use matriz com construtor</h3>
        <h4>Calculo da soma dos elementos da diagonal principal e a soma dos elementos da diagonal
            secundária da matriz.</h4>
        <h4>Linha 1 = 10, 20, 30<br>Linha 2 = 40, 50, 60<br>Linha 3 = 70, 80, 90</h4>
        <?php
            $numeros = array(
                $linha1 = array(
                    10,
                    20,
                    30
                ),
                $linha2 = array(
                    40,
                    50,
                    60
                ),
                $linha3 = array(
                    70,
                    80,
                    90
                )
            );
           $x = 3;
           $soma1 = 0;
           $soma2 = 0;
           for($i = 0; $i < 3; $i++){
               $soma1 += $numeros[$i][$i];
               printf("Diagonal primária = %u<br>",$numeros[$i][$i]);
           }
           echo "<br>";
           for($i = 0; $i < 3; $i++){
            $x--;
            $soma2 += $numeros[$i][$x];
            printf("Diagonal segundária = %u<br>",$numeros[$x][$i]);
        }
            echo "<br>";
            printf("Soma diagonal primária = %u<br>",$soma1);
            printf("Soma diagonal segundário = %u",$soma2);
        ?>
    </div>
    <div class="questoes">
        <h3>3) Use array com implícito</h3>
        <h4>Média das idades:</h4>
        <h4>Idades: 18, 28, 35, 56</h4>
        <?php
            $media = 0;
            $vetor[] = 18;
            $vetor[1] = 28;
            $vetor[2] = 35;
            $vetor[3] = 56;

            for($i = 0; $i < 4; $i++){
                $media += $vetor[$i];
            }
            printf("Soma das idades = %u<br>Média = %.2f",$media, $media / 4);
        ?>
    </div>
    <div class="questoes">
        <h3>4) Use matriz com implícito</h3>
        <h4>Matriz invertida</h4>
        <h4>Linha 1 = 10, 20, 30<br>Linha 2 = 40, 50, 60<br>Linha 3 = 70, 80, 90</h4>
        <?php
            $matriz[0][0] = 10;
            $matriz[0][1] = 20;
            $matriz[0][2] = 30;
            $matriz[1][0] = 40;
            $matriz[1][1] = 50;
            $matriz[1][2] = 60;
            $matriz[2][0] = 70;
            $matriz[2][1] = 80;
            $matriz[2][2] = 90;
            printf("Linha 1 = %u, %u, %u<br>",$matriz[0][2], $matriz[0][1], $matriz[0][0]);
            printf("Linha 2 = %u, %u, %u<br>",$matriz[1][2], $matriz[1][1], $matriz[1][0]);
            printf("Linha 3 = %u, %u, %u",$matriz[2][2], $matriz[2][1], $matriz[2][0]);
        ?>
    </div>
</body>
</html>