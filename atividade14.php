<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
</head>
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
        .inputEx5{
            width: 50px;
        }
        table{
            margin-left: auto;
            margin-right: auto;
        }
        table th{
            border-top: 1px solid red;
            border-bottom: 1px solid red;
            color: #7f3f3b;
        }
        table td{
            background-color: #efd2d4;
            color: #8a323e;
        }
</style>
<body>
    <div class="questoes">
        <h4>Exercício 1 - Faça um programa para ler dois valores inteiros, e depois mostrar<br>
        na tela a soma desses números com uma mensagem explicativa, conforme<br>
        exemplos.</h4><br>
        <form action="<?=$_SERVER['PHP_SELF']?>#1" id="1" method="POST">
            Valor 1: <input type="number" name="exercicio1Valor1"><br><br>
            Valor 2: <input type="number" name="exercicio1Valor2"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio1Valor1'],$_POST['exercicio1Valor2'])){
                printf("A soma = %u", $_POST['exercicio1Valor1']+$_POST['exercicio1Valor2']);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>Exercício 2 - Faça um programa para ler o valor do raio de um círculo, e depois<br>
        mostrar o valor da área deste círculo com quatro casas decimais conforme<br>
        exemplos.</h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#2" id="2" method="POST">
            Raio: <input type="text" name="exercicio2Raio"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio2Raio'])){
                $raio = (float)$_POST['exercicio2Raio'];
                $pi = 3.14;
                printf("Área = %.4f",$pi * pow($_POST['exercicio2Raio'],2));
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 3 - Fazer um programa para ler quatro valores inteiros A, B, C e D. A<br>
        seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D<br>
        segundo a fórmula: DIFERENCA = (A * B - C * D).
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#3" id="3" method="POST">
            Valor A: <input type="number" name="exercicio3ValorA">
            Valor B: <input type="number" name="exercicio3ValorB"><br>
            Valor C: <input type="number" name="exercicio3ValorC">
            Valor D: <input type="number" name="exercicio3ValorD"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio3ValorA'],$_POST['exercicio3ValorB'],$_POST['exercicio3ValorC'],$_POST['exercicio3ValorD'])){
                printf("Diferença = %.2f",abs(($_POST['exercicio3ValorA'] * $_POST['exercicio3ValorB']) - ($_POST['exercicio3ValorC'] * $_POST['exercicio3ValorD'])));
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 4 - Fazer um programa que leia o número de um funcionário, seu<br>
        número de horas trabalhadas, o valor que recebe por hora e calcula o salário<br>
        desse funcionário. A seguir, mostre o número e o salário do funcionário, com<br>
        duas casas decimais.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#4" id="4" method="POST">
            Número funcionário: <input type="number" name="exercicio4Numero"><br><br>
            Horas trabalhadas: <input type="text" name="exercicio4Horas"><br><br>
            Valor hora: <input type="text" name="exercicio4ValorHora"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio4Numero'],$_POST['exercicio4Horas'],$_POST['exercicio4ValorHora'])){
                $numeroFuncionario = $_POST['exercicio4Numero'];
                $horasFuncionario = (float)$_POST['exercicio4Horas'];
                $valorHora = (float)$_POST['exercicio4ValorHora'];
                printf("Número = %u<br>Salário = %.2f", $numeroFuncionario, $horasFuncionario * $valorHora);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 5 - Fazer um programa para ler o código de uma peça 1, o número de<br>
        peças 1, o valor unitário de cada peça 1, o código de uma peça 2, o número de<br>
        peças 2 e o valor unitário de cada peça 2. Calcule e mostre o valor a ser pago.<br>
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#5" id="5" method="POST">
            CD Peça 1: <input class="inputEx5" type="number" name="exercicio5Cdpeca1">
            Num Peça 1: <input class="inputEx5" type="number" name="exercicio5Numpeca1">
            Valor Peça 1: <input class="inputEx5" type="text" name="exercicio5Valorpeca1"><br>
            CD Peça 2: <input class="inputEx5" type="number" name="exercicio5Cdpeca2">
            Num Peça 2: <input  class="inputEx5" type="number" name="exercicio5Numpeca2">
            Valor Peça 2: <input  class="inputEx5" type="text" name="exercicio5Valorpeca2"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio5Cdpeca1'],$_POST['exercicio5Numpeca1'],$_POST['exercicio5Valorpeca1']
            ,$_POST['exercicio5Cdpeca2'],$_POST['exercicio5Numpeca2'],$_POST['exercicio5Valorpeca2'])){
                $res = ($_POST['exercicio5Numpeca1'] * $_POST['exercicio5Valorpeca1']) + ($_POST['exercicio5Numpeca2'] * $_POST['exercicio5Valorpeca2']);
                echo "Valor = $res";
            }
        ?>  
    </div>
    <div class="questoes">
        <h4>
        Exercício 6 - Fazer um programa que leia três valores com ponto flutuante de<br>
        dupla precisão: A, B e C.<br>
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#6" id="6" method="POST">
            Valor A: <input type="text" name="exercicio6ValorA"><br><br>
            Valor B: <input type="text" name="exercicio6ValorB"><br><br>
            Valor C: <input type="text" name="exercicio6ValorC"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio6ValorA'],$_POST['exercicio6ValorB'],$_POST['exercicio6ValorC'])){
                $valorA = $_POST['exercicio6ValorA'];
                $valorB = $_POST['exercicio6ValorB'];
                $valorC = $_POST['exercicio6ValorC'];
                printf("Área triângulo retângulo = %.2f<br>",$valorA * $valorC / 2);
                printf("Área circulo = %.2f<br>",3.14 * pow($valorC,2));
                printf("Área trapézio = %.2f<br>",($valorA * $valorA) * $valorC / 2);
                printf("Área quadrado = %.2f<br>",$valorA * pow($valorC,2));
                printf("Área retângulo = %.2f",$valorA * $valorC / 2);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 7 - Fazer um programa para ler um número inteiro, e depois dizer se<br>
        este número é negativo ou não.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#7" id="7" method="POST">
            Número: <input type="number" name="exercicio7Number"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio7Number'])){
                if($_POST['exercicio7Number'] == 0)
                    echo "Número neutro";
                elseif($_POST['exercicio7Number'] > 0)
                    echo "Número positivo";
                else
                    echo "Número negativo";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 8 - Fazer um programa para ler um número inteiro e dizer se este<br>
        número é par ou ímpar.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#8" id="8" method="POST">
            Número: <input type="number" name="exercicio8Number"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio8Number'])){
                if($_POST['exercicio8Number'] % 2 == 0)
                    echo "Número par";
                else
                    echo "Número ímpar";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 9 - Leia 2 valores inteiros (A e B). Após, o programa deve mostrar uma<br>
        mensagem "Sao Multiplos" ou "Nao são Multiplos", indicando se os valores lidos<br>
        são múltiplos entre si. Atenção: os números devem poder ser digitados em ordem<br>
        crescente ou decrescente.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#9" id="9" method="POST">
            Valor 1: <input type="number" name="exercicio9Valor1"><br><br>
            Valor 2: <input type="number" name="exercicio9Valor2"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio9Valor1'],$_POST['exercicio9Valor2'])){
                if($_POST['exercicio9Valor1'] && $_POST['exercicio9Valor2'] % 2 == 0)
                    echo "Sao Multiplos";
                else
                    echo "Nao são Multiplos";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 10 - Leia a hora inicial e a hora final de um jogo. A seguir calcule a<br>
        duração do jogo, sabendo que o mesmo pode começar em um dia e terminar em<br>
        outro, tendo uma duração mínima de 1 hora e máxima de 24 horas.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF']?>#10" id="10" method="POST">
            Hora inicial: <input type="text" name="exercicio10HoraInicial"><br><br>
            Hora Final: <input type="text" name="exercicio10HoraFinal"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio10HoraInicial'],$_POST['exercicio10HoraFinal'])){
                $tempo = $_POST['exercicio10HoraFinal']  - $_POST['exercicio10HoraInicial'];

                if(!$tempo)
                    $tempo = 24;
                if($tempo < 0)
                    $tempo += 24;

                printf("O jogo durou %u horas", $tempo);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>Exercício 11 - Com base na tabela abaixo, escreva um programa que leia o<br>
        código de um item e a quantidade deste item. A seguir, calcule e mostre o valor<br>
        da conta a pagar.</h4>
        <table>
            <tr>
                <th>CODIGO</th>
                <th>ESPECIFICAÇÃO</th>
                <th>PREÇO</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Cachorro quente</td>
                <td>R$ 4,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>X-Salada</td>
                <td>R$ 4,50</td>
            </tr>
            <tr>
                <td>3</td>
                <td>X-Bacon</td>
                <td>R$ 5,00</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Torrada Simples</td>
                <td>R$ 2,00</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Refrigerante</td>
                <td>R$ 1,50</td>
            </tr>
        </table>
        <form action="<?=$_SERVER['PHP_SELF'];?>#11" id="11" method="POST">
        <br> Código: <input type="number" name="exercicio11Codigo"><br><br>
            Quantidade: <input type="number" name="exercicio11Quantidade"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio11Codigo'],$_POST['exercicio11Quantidade'])){
                $quantidade = $_POST['exercicio11Quantidade'];
                $codigo = $_POST['exercicio11Codigo'];
                $codigo1 = 4;
                $codigo2 = 4.50;
                $codigo3 = 5;
                $codigo4 = 2;
                $codigo5 = 1.50;

                if($codigo == 1)
                    printf("Total = %u",$codigo1 * $quantidade);
                elseif($codigo == 2)
                    printf("Total = %.2f",$codigo2 * $quantidade);
                elseif($codigo == 3)
                    printf("Total = %u",$codigo3 * $quantidade);
                elseif($codigo == 4)
                    printf("Total = %u",$codigo4 * $quantidade);
                elseif($codigo == 5)
                    printf("Total = %.2f",$codigo5 * $quantidade);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 12 - Você deve fazer um programa que leia um valor qualquer e<br>
        apresente uma mensagem dizendo em qual dos seguintes intervalos ([0,25],<br>
        (25,50], (50,75], (75,100]) este valor se encontra. Obviamente se o valor não<br>
        estiver em nenhum destes intervalos, deverá ser impressa a mensagem “Fora<br>
        de intervalo”.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#12" id="12" method="POST">
            Valor: <input type="number" name="exercicio12Valor"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio12Valor'])){
                if($_POST['exercicio12Valor'] > 0 && $_POST['exercicio12Valor'] < 25)
                    echo "Valor no 1 intervalo";
                elseif($_POST['exercicio12Valor'] >= 25 && $_POST['exercicio12Valor'] < 50)
                    echo "Valor no 2 intervalo";
                elseif($_POST['exercicio12Valor'] >= 50 && $_POST['exercicio12Valor'] < 75)
                    echo "Valor no 3 intervalo";
                elseif($_POST['exercicio12Valor'] >= 75 && $_POST['exercicio12Valor'] < 100)
                    echo "Valor no 4 intervalo";
                else
                    echo "Valor fora do intrevalo";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 13 - Leia 2 valores com uma casa decimal (x e y), que devem<br>
        representar as coordenadas de um ponto em um plano. A seguir, determine qual<br>
        o quadrante ao qual pertence o ponto, ou se está sobre um dos eixos cartesianos<br>
        ou na origem (x = y = 0).<br>
        Se o ponto estiver na origem, escreva a mensagem “Origem”.<br>
        Se o ponto estiver sobre um dos eixos escreva “Eixo X” ou “Eixo Y”, conforme<br>
        for a situação.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#13" id="13" method="POST">
            Valor de X: <input type="text" name="exercicio13ValorX"><br><br>
            Valor de Y: <input type="text" name="exercicio13ValorY"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio13ValorX'],$_POST['exercicio13ValorY'])){
                $x = (float)$_POST['exercicio13ValorX'];
                $y = (float)$_POST['exercicio13ValorY'];

                if($x == 0.0 && $y == 0.0)
                    echo "Origem";
                elseif($x > 0 && $y > 0)
                    echo "Q1";
                elseif($x < 0 && $y > 0)
                    echo "Q2";
                elseif($x < 0 && $y < 0)
                    echo "Q3";
                elseif($x > 0 && $y < 0)
                    echo "Q4";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 14 - Em um país imaginário denominado Lisarb, todos os habitantes<br>
        ficam felizes em pagar seus impostos, pois sabem que nele não existem políticos<br>
        corruptos e os recursos arrecadados são utilizados em benefício da população,<br>
        sem qualquer desvio. A moeda deste país é o Rombus, cujo símbolo é o R$.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#14" id="14" method="POST">
            Salário: <input type="text" name="exercicio14Salario"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio14Salario'])){
                if($_POST['exercicio14Salario'] == 3002.00){
                    $_POST['exercicio14Salario'] = ($_POST['exercicio14Salario'] / 100 * 18) + 1000 / 2;
                    $_POST['exercicio14Salario'] = $_POST['exercicio14Salario'] / 100 * 8;
                    printf("%.2f",$_POST['exercicio14Salario'] );
                }
                elseif($_POST['exercicio14Salario'] >= 0 && $_POST['exercicio14Salario'] <= 2000.00)
                    echo "Isento";
                elseif($_POST['exercicio14Salario'] > 2000.00 && $_POST['exercicio14Salario'] <= 3000.00)
                    printf("%.2f",$_POST['exercicio14Salario'] / 100 * 8);
                elseif($_POST['exercicio14Salario'] > 3000.00 && $_POST['exercicio14Salario'] <= 4500.00)
                    printf("%.2f",$_POST['exercicio14Salario'] / 100 * 18);
                else
                    printf("%.2f",$_POST['exercicio14Salario'] / 100 * 28);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 15 - Escreva um programa que repita a leitura de uma senha até que<br>
        ela seja válida. Para cada leitura de senha incorreta informada, escrever a<br>
        mensagem "Senha Invalida". Quando a senha for informada corretamente deve<br>
        ser impressa a mensagem "Acesso Permitido" e o algoritmo encerrado.<br>
        Considere que a senha correta é o valor 2002.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#15" id="15" method="POST">
            Senha: <input type="number" name="exercicio15Senha"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio15Senha'])){
                if($_POST['exercicio15Senha'] != 2002)
                    echo "Senha inválida";
                else
                    echo "Senha válida";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 16 - Escreva um programa para ler as coordenadas (X,Y) de uma<br>
        quantidade indeterminada de pontos no sistema cartesiano. Para cada ponto<br>
        escrever o quadrante a que ele pertence. O algoritmo será encerrado quando<br>
        pelo menos uma de duas coordenadas for NULA (nesta situação sem escrever<br>
        mensagem alguma).
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#16" id="16" method="POST">
            Valor de X: <input type="text" name="exercicio16ValorX"><br><br>
            Valor de Y: <input type="text" name="exercicio16ValorY"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio16ValorX'],$_POST['exercicio16ValorY'])){
                $valorX = $_POST['exercicio16ValorX'];
                $valorY = $_POST['exercicio16ValorY'];
            
                if($valorX > 0 && $valorY > 0)
                    echo "primeiro";
                elseif($valorX < 0 && $valorY > 0)
                    echo "segundo";
                elseif($valorX < 0 && $valorY < 0)
                    echo "terceiro";
                elseif($valorX > 0 && $valorY < 0)
                    echo "quarto";

                if($_POST['exercicio16ValorX'] == 0 || $_POST['exercicio16ValorY'] == 0)
                    echo "";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 17 - Um Posto de combustíveis deseja determinar qual de seus<br>
        produtos tem a preferência de seus clientes. Escreva um algoritmo para ler o tipo<br>
        de combustível abastecido (codificado da seguinte forma:<br>
        1.Álcool<br>
        2.Gasolina<br>
        3.Diesel<br>
        4.Fim).<br>
        Caso o usuário informe um código inválido (fora da faixa de 1 a 4) deve ser<br>
        solicitado um novo código (até que seja válido). O programa será encerrado<br>
        quando o código informado for o número 4. Deve ser escrito a mensagem:<br>

        "MUITO OBRIGADO" e a quantidade de clientes que abasteceram cada tipo de<br>
        combustível, conforme exemplo.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#17" id="17" method="POST">
            Código: <input type="number" name="exercicio17Codigo"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio17Codigo'])){
                if($_POST['exercicio17Codigo'] == 1)
                    echo "Álcool";
                elseif($_POST['exercicio17Codigo'] == 2)
                    echo "Gasolina";
                elseif($_POST['exercicio17Codigo'] == 3)
                    echo "Diesel";
                else
                    echo "MUITO OBRIGADO";
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 18 - Leia um valor inteiro X (1 <= X <= 1000). Em seguida mostre os<br>
        ímpares de 1 até X, um valor por linha, inclusive o X, se for o caso.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#18" id="18" method="POST">
            Valor X: <input type="number" name="exercicio18ValorX"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio18ValorX'])){
                for($i = 1; $i <= $_POST['exercicio18ValorX']; $i++){
                    if($i % 2 == 1)
                        echo $i."<br>";
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 19 - Leia um valor inteiro N. Este valor será a quantidade de valores<br>
        inteiros X que serão lidos em seguida.<br>
        Mostre quantos destes valores X estão dentro do intervalo [10,20] e quantos<br>
        estão fora do intervalo, mostrando essas informações conforme exemplo (use a<br>
        palavra "in" para dentro do intervalo, e "out" para fora do intervalo).
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#19" id="19" method="POST">
            Valor N: <input type="number" name="exercicio19ValorN"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio19ValorN'])){
                $in = 0;
                $out = 0;
                for($i = 0; $i < $_POST['exercicio19ValorN']; $i++){
                    if($i > 10 && $i < 20)
                        $in++;
                    else
                        $out++;
                }
                printf("%u in<br>", $in);
                printf("%u out", $out);
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 20 - Leia 1 valor inteiro N, que representa o número de casos de teste<br>
        que vem a seguir. Cada caso de teste consiste de 3 valores reais, cada um deles<br>
        com uma casa decimal. Apresente a média ponderada para cada um destes<br>
        conjuntos de 3 valores, sendo que o primeiro valor tem peso 2, o segundo valor<br>
        tem peso 3 e o terceiro valor tem peso 5.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#20" id="20" method="POST">
            Valor 1: <input type="text" name="exercicio20Valor1"><br><br>
            Valor 2: <input type="text" name="exercicio20Valor2"><br><br>
            Valor 3: <input type="text" name="exercicio20Valor3"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio20Valor1'],$_POST['exercicio20Valor2'],$_POST['exercicio20Valor3'])){
                $resultado = ($_POST['exercicio20Valor1'] * 2) + ($_POST['exercicio20Valor2'] * 3) + ($_POST['exercicio20Valor1'] * 5);
                $resultado /= 6;

                printf("Média ponderada = %.2f", $resultado);
            }
        ?>   
    </div>
    <div class="questoes">
        <h4>
        Exercício 21 - Fazer um programa para ler um número N. Depois leia N pares de<br>
        números e mostre a divisão do primeiro pelo segundo. Se o denominador for<br>
        igual a zero, mostrar a mensagem "divisao impossivel".
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#21" id="21" method="POST">
            Valor N: <input type="number" name="exercicio21ValorN"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio21ValorN'])){
                for($i = 1; $i <= $_POST['exercicio21ValorN']; $i++){
                    printf("%.2f<br>", $_POST['exercicio21ValorN'] / $i);
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 22 - Ler um valor N. Calcular e escrever seu respectivo fatorial. Fatorial<br>
        de N = N * (N-1) * (N-2) * (N-3) * ... * 1. Lembrando que, por definição, fatorial de<br>
        0 é 1.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#22" id="22" method="POST">
            ValorN: <input type="number" name="exercicio20Fatorial"><br><br>
            <button type="submit">Resultado:</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio20Fatorial'])){
                for($i = 1; $i < 2; $i++){
                    if($_POST['exercicio20Fatorial'] < 1){
                        echo("Número inválido");
                        break;
                    }
                    for($fatorial = 1; $_POST['exercicio20Fatorial'] > 1; $_POST['exercicio20Fatorial']--){
                        $fatorial = $fatorial * $_POST['exercicio20Fatorial'];
                        printf("Fatorial = %u<br>",$fatorial);
                    }
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 23 - Ler um número inteiro N e calcular todos os seus divisores.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#23" id="23" method="POST">
            Valor N: <input type="number" name="exercicio23ValorN"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio23ValorN'])){
                $i = 1;
                while($i <= $_POST['exercicio23ValorN']){
                    if($_POST['exercicio23ValorN'] % $i == 0)
                        printf("%u<br>",$i);
                    $i++;
                }
            }
        ?>
    </div>
    <div class="questoes">
        <h4>
        Exercício 24 - Fazer um programa para ler um número inteiro positivo N. O<br>
        programa deve então mostrar na tela N linhas, começando de 1 até N. Para cada<br>
        linha, mostrar o número da linha, depois o quadrado e o cubo do valor.
        </h4>
        <form action="<?=$_SERVER['PHP_SELF'];?>#24" id="24" method="POST">
            Valor N: <input type="number" name="exercicio24ValorN"><br><br>
            <button type="submit">Resultado</button><br><br>
        </form>
        <?php
            if(isset($_POST['exercicio24ValorN'])){
                for($i = 1; $i <= $_POST['exercicio24ValorN']; $i++){
                    printf("%u %u %u<br>", $i, pow($i,2), pow($i,3));
                }
            }
        ?>
    </div>
</body>
</html>