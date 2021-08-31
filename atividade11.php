<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #e4eaeb;
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
        .col-12 {width: 100%;}
    </style>
</head>
<body>
    <div class="questoes">
        <h3>1) Faça um programa que utilize switch.</h3>
        <h4>Selecione o tipo de operação:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="radio" name="operacao" value="soma" id="somaId">Soma
            <input type="radio" name="operacao" value="subtracao" id="somaId">Subtração
            <input type="radio" name="operacao" value="multiplicacao" id="somaId">Multiplicação
            <input type="radio" name="operacao" value="divisao" id="somaId">Divisão<br><br>
            Digite o primeiro valor: <input type="number" name="valor1" id="valor1Id"><br><br>
            Digite o segundo valor: <input type="number" name="valor2" id="valor2Id"><br><br>
            <button type="submit">Resultado:</button>
        </form>
        <?php
            if(isset($_POST['operacao'], $_POST['valor1'], $_POST['valor2'])){
                $op = $_POST['operacao'];
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                switch($op){
                    case $op == "soma":
                        printf("<br>Soma = %u",$valor1 + $valor2);
                        break;
                    case $op == "subtracao":
                        printf("<br>Subtração = %u",$valor1 - $valor2);
                        break;
                    case $op == "multiplicacao":
                        printf("<br>Multiplicação = %u",$valor1 * $valor2);
                        break;
                    case $op == "divisao":
                        printf("<br>Divisão = %.2f",$valor1 / $valor2);
                        break;
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h3>2) Faça um programa que utilize while.</h3>
        <h4>Potência de um número:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Número: <input type="text" name="numero" id="numeroId"><br><br>
            Potência: <input type="number" name="potencia" id="potenciaId"><br><br>
            Intervalo: <input type="number" name="intervalo" id="intervaloId"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
    
    <?php
        if(isset($_POST['numero'], $_POST['potencia'], $_POST['intervalo'])){
            $i = 0;
            $numero = (float)$_POST['numero'];
            while($i < $_POST['intervalo']){
                $resultado = pow($numero, $_POST['potencia']);
                printf("Potência = %.2f<br>",$resultado);
                $_POST['potencia'] += 1;
                $i++;
            }
        }
    ?>
    </div>
    <div class="questoes">
        <h3>3) Faça um programa que utilize do while.</h3>
        <h4>Números pares até o limite estabelecido:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Limite: <input type="number" name="limite" id="limiteId"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
        <?php
            if(isset($_POST['limite'])){
                $i = 0;
                do{
                    if($i % 2 == 0)
                        printf("Número par = %u<br>",$i);
                    $i++;
                }while($i < $_POST['limite']);
            }
        ?>
    </div>
    <div class="questoes">
        <h3>4) Faça um programa que utilize for.</h3>
        <h4>Números ímpares em um intervalo</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Começo: <input type="number" name="comeco" id="comecoId"><br><br>
            Fim: <input type="number" name="fim" id="fimId"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
        <?php
            if(isset($_POST['comeco'], $_POST['fim'])){
                $impar = 0;
                for($i = $_POST['comeco']++; $i < $_POST['fim']; $i++){
                    if($i % 2 == 1){
                        $impar++;
                    }
                }
                printf("Existem %u números ímpares no intervalo.",$impar);
            }
        ?>
    </div>
    <div class="questoes">
        <h3>5) Faça um programa que utilize break.</h3>
        <h4>Calcular fatorial de um número:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Número: <input type="number" name="numeroFatorial" id="numeroFatorialId"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
        <?php
            if(isset($_POST['numeroFatorial'])){
                for($i = 1; $i < 2; $i++){
                    if($_POST['numeroFatorial'] < 1){
                        echo("Número inválido");
                        break;
                    }
                    for($fatorial = 1; $_POST['numeroFatorial'] > 1; $_POST['numeroFatorial']--){
                        $fatorial = $fatorial * $_POST['numeroFatorial'];
                        printf("Fatorial = %u<br>",$fatorial);
                    }
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h3>6) Faça um programa que utilize continue.</h3>
        <h4>Saber se um número é primo:</h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            Número: <input type="number" name="numeroPrimo" id="numeroPrimoId"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
        <?php
            if(isset($_POST['numeroPrimo'])){
                $i = 0;
                $primo = 0;
                while($i < $_POST['numeroPrimo']){
                    if($_POST['numeroPrimo'] > 10000000){
                        continue;
                    }
                    $i++;
                    if($_POST['numeroPrimo'] % $i == 0){
                        $primo++;
                    }
                }
                if($primo == 2)
                    printf("%u é número primo",$_POST['numeroPrimo']);
                else
                    printf("%u não é número primo",$_POST['numeroPrimo']);
            }
        ?>
    </div>
</body>
</html>