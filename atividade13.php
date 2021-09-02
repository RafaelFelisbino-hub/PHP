<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13</title>
    <style>
      body{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .questoes{
            text-align: center;
            width: clamp(200px, 500px, 700px);
            border: 1px solid black;
            padding: 5px;
            margin-bottom: 20px;
        }
        button{
        padding: 7px;
        background-color: rgb(255, 66, 77);
        color: #fff;
        border: 1px solid rgb(255, 66, 77);
        border-radius: 50px;
        cursor: pointer;
        }
        .inputMatriz{
            width: 30px;
        }
        .res{
            margin-left: auto;
            margin-right: auto;
            width: 80px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="questoes">
        <h3>Função 1</h3>
        <h4>Saber o peso de acordo com o IMC</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#1" id="1" method="POST">
            Peso: <input type="text" name="pesoImc" id="pesoImcId"><br><br>
            Altura: <input type="text" name="alturaImc" id="alturaImcId"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['pesoImc'],$_POST['alturaImc'])){
                $peso = (float)$_POST['pesoImc'];
                $altura = (float)$_POST['alturaImc'];
                function fn_peso_imc ($peso, $altura){
                    $imc = $peso / ($altura * $altura);
                    return $imc;
                }
                $pesoImc = fn_peso_imc($peso, $altura);
                printf("Seu peso IMC = %.2f", $pesoImc);
            }
        ?>
    </div>
    <div class="questoes">
        <h3>Função 2</h3>
        <h4>Preencher a Função 1 para executar esta função</h4>
        <h4>Qual faixa se encaixa seu peso IMC:</h4>
        <?php
            if(isset($_POST['pesoImc'],$_POST['alturaImc'])){
            function fn_peso_ideal_imc($pesoImc){
                if($pesoImc < 17)
                    echo "Muito abaixo do peso";
                elseif($pesoImc >= 17 && $pesoImc < 18.50)
                    echo "Abaixo do peso";
                elseif($pesoImc >= 18.50 && $pesoImc < 25)
                    echo "Peso normal";
                elseif($pesoImc >= 25 && $pesoImc < 30)
                    echo "Acima do peso";
                elseif($pesoImc >= 30 && $pesoImc < 35)
                    echo "Obesidade 1";
                elseif($pesoImc >= 35 && $pesoImc < 40)
                    echo "Obesidade 2 (Severa)";
                else
                    echo "Obesidade 3 (Mórbida)";
            }
        
            fn_peso_ideal_imc($pesoImc);
        }
        ?>
    </div>
    <div class="questoes">
        <h3>Função 3</h3>
        <h4>Calcular área do triângulo</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#3" id="3" method="POST">
            Base: <input type="text" name="baseTriangulo" id="baseTrianguloid"><br><br>
            Altura: <input type="text" name="alturaTriangulo" id="alturaTrianguloId"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['baseTriangulo'],$_POST['alturaTriangulo'])){
                $base = (float)$_POST['baseTriangulo'];
                $altura = (float)$_POST['alturaTriangulo'];
                function fn_area_triangulo($base, $altura){
                    $res = 0;
                    $res = ($base * $altura) / 2;
                    return $res;
                }
                $resultado = fn_area_triangulo($base, $altura);
                printf("Área do triângulo = %.2f", $resultado);
            }
        ?>
    </div>
    <div class="questoes">
        <h3>Função 4</h3>
        <h4>Tendo X e Y, aumentar X em Y%</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#4" id="4" method="POST">
            Valor de X: <input type="text" name="x" id="xId"><br><br>
            Valor de Y: <input type="text" name="y" id="yId"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['x'],$_POST['y'])){
                $x = (float)$_POST['x'];
                $y = (float)$_POST['y'];

                function fn_x_para_y($x, $y){
                    $aux = 0;
                    $aux = $x * $y / 100;
                    $x += $aux;
                    return $x;
                }
                $resultadoXy = fn_x_para_y($x, $y);
                printf("X em Y%% = %.2f", $resultadoXy);
            }
        ?>
    </div>
    <div class="questoes">
        <h3>Matriz com foreach</h3>
        <h4>Preencha a Matriz[3][3]</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#5" id="5" method="POST">
        <p>Linha 1</p>
        [0][0]: <input class="inputMatriz" type="number" name="valor1" id="valor1Id">
        [0][1]: <input class="inputMatriz" type="number" name="valor2" id="valor2Id">
        [0][2]: <input class="inputMatriz" type="number" name="valor3" id="valor3Id">
        <p>Linha 2</p>
        [1][0]: <input class="inputMatriz" type="number" name="valor4" id="valor4Id">
        [1][1]: <input class="inputMatriz" type="number" name="valor5" id="valor5Id">
        [1][2]: <input class="inputMatriz" type="number" name="valor6" id="valor6Id">
        <p>Linha 3</p>
        [2][0]: <input class="inputMatriz" type="number" name="valor7" id="valor7Id">
        [2][1]: <input class="inputMatriz" type="number" name="valor8" id="valor8Id">
        [2][2]: <input class="inputMatriz" type="number" name="valor9" id="valor9Id"><br><br>
        <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['valor1'],$_POST['valor2'],$_POST['valor3'],
            $_POST['valor4'],$_POST['valor5'],$_POST['valor6'],
            $_POST['valor7'],$_POST['valor8'],$_POST['valor9'])){
                $matriz = array(
                    $linha1 = array(
                        $_POST['valor1'],
                        $_POST['valor2'],
                        $_POST['valor3']
                    ),
                    $linha2 = array(
                        $_POST['valor4'],
                        $_POST['valor5'],
                        $_POST['valor6']
                    ),
                    $linha3 = array(
                        $_POST['valor7'],
                        $_POST['valor8'],
                        $_POST['valor9']
                    )
                );
                $i = 0;
                echo '<div class="res">';
                foreach($matriz as $linhas){
                    foreach($linhas as $linha){
                        $i++;
                        echo $linha." ";
                        if($i == 3) echo "<br>";
                        if($i == 6) echo "<br>";
                    }
                }
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>