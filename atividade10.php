<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
    <style>
        body{
            text-align: center;
        }
    </style>
    </head>
<body>
    <h3>1. Faça um programa que exiba na tela “Use máscara!”.</h3>
    <?php
        echo "Use mascara!";
    ?>
    <hr>
    <h3>2. Faça um programa que exiba na tela “2021”.</h3>
    <?php
        echo 2021;
    ?>
    <hr>
    <h3>3. Faça um programa que exiba na tela o seu nome, sua turma e a data.</h3>
    <?php
        echo "Rafael, TII2001M, 27/08/2021";
    ?>
    <hr>
    <h3>4. Crie uma variável para receber seu nome e a data do seu nascimento como
    valores.<br> Exiba uma mensagem concatenando os valores das variáveis.</h3>
    <?php
        $nome = "Rafael";
        $data = "04/05/1996";
        echo "$nome nascido em $data";
    ?>
    <hr>
    <h3>5. Faça um programa que informe o nome e idade de todos os integrantes da
    sua casa.<br> Depois exiba a soma das idades.</h3>
    <?php
        $nomes = array("Rafael","Zeca Urubu","Café");
        $idades = array(25,21,9999);
        $arrayLenght = count($nomes);

        for($i = 0; $i < $arrayLenght; $i++){
            $somaIdades += $idades[$i];
            echo "Pessoa: $nomes[$i], idade:$idades[$i] <br>";
        }

        echo "Soma idades = $somaIdades";
    ?>
    <hr>
    <h3>6. Procure na internet um conversor de moeda. <br>Escreva um programa que
    converta sua mesada de reais para dólar.</h3>
    <?php
        $valorReais = 100;
        $cotacaoDolar = 5.25;

        printf("%u reais em dolares = %f",$valorReais, $valorReais/$cotacaoDolar);
    ?>
    <hr>
    <h3>7. Continuando o programa anterior. Se sua mesada em dólares for maior que <br>
    US$ 100,00 escreva "Vou comprar bitcoin". Se for maior que US$ 200,00 <br>
    escreva "Vou investir no tesouro nacional". Se for menor que U$100,00 escreva <br>
    "Vou comprar bala".</h3>
    <?php
        $valorReais = 100;
        $cotacaoDolar = 5.25;

        if($valorReais/$cotacaoDolar > 100)
            echo "Vou comprar bitcoin";
        elseif($valorReais/$cotacaoDolar > 200)
            echo "Vou investir no tesouro nacional";
        else
            echo "Vou comprar bala";
    ?>
    <hr>
    <h3>8. Faça um programa que converta Fahrenheit em Celsius. <br>Sabendo que a
    formula é C = (F – 32) / 1.8 e escreva na tela<br> a temperatura em graus Celsius e
    em Fahrenheit.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#8" id="8" method="POST">
        <p>Digite o valor em Fahrenheit:</p>
        <input type="text" name="fahren" id="fahrenId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['fahren'])){
    $value = $_POST['fahren'];

    $celsius = ($value - 32) / 1.8;
    $celsius = floor($celsius);

    echo "$value em Celsius = $celsius";
    }
    ?>
    <hr>
    <h3>9. Escreva um programa para ler o salário mensal atual de um funcionário e o
    percentual de reajuste de 6%.<br> Calcular e escrever o valor do novo salário.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#9" id="9" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salario" id="salarioId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['salario'])){
        $salario = $_POST['salario'];

        $reajuste = $salario - $salario * 0.06;
        $reajuste = floor($reajuste);
    
        printf("Salario com reajuste = %.2f",$reajuste); 
    }
    ?>
    <hr>
    <h3>10. Faça um programa que receba um valor que foi depositado e exiba o valor
    com rendimento após um mês. <br>Considere fixo o juro da poupança em 0,049%
    a. m.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#10" id="10" method="POST">
        <p>Digite o valor depositado:</p>
        <input type="number" name="valorDepositado" id="valorDepositadoId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['valorDepositado'])){
        $valorDepositado = $_POST['valorDepositado'];
        $rendimento = $valorDepositado + $valorDepositado * 0.049;

        printf("Valor com rendimento = %.2f",$rendimento);
    }
    ?>
    <hr>
    <h3>11. Escreva um programa para ler o nome e a idade de uma pessoa, e exibir
    quantos dias de vida ela possui.<br> Considere sempre anos completos, e que um
    ano possui 365 dias. Ex: uma pessoa com 19 anos possui 6935 dias de vida;<br>
    veja um exemplo de saída: MARIA, VOCÊ JÁ VIVEU 6935 DIAS.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#11" id="11" method="POST">
        <p>Digite seu nome:</p>
        <input type="text" name="nomeDias" id="nomeDiasId">
        <p>Digite sua idade:</p>
        <input type="number" name="idadeDias" id="idadeDiasId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['nomeDias'],  $_POST['idadeDias'])){
        $nomeDias = $_POST['nomeDias'];
        $idadeDias = $_POST['idadeDias'];

        printf("%s viveu %u dias",$nomeDias, $idadeDias * 365);
    }
    ?>
    <hr>
    <h3>12. Escreva um programa para ler o número total de eleitores de um município,
    o número de votos brancos, nulos e válidos.<br> Calcular e escrever o percentual
    que cada um representa em relação ao total de eleitores.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#12" id="12" method="POST">
        <p>Numero total de eleitores:</p>
        <input type="number" name="numEleitores" id="numEleitoresId">
        <p>Votos brancos:</p>
        <input type="number" name="votosBrancos" id="votosBrancosId">
        <p>Votos nulos:</p>
        <input type="number" name="votosNulos" id="votosNulosId">
        <p>Votos válidos:</p>
        <input type="number" name="votosValidos" id="votosValidosId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['numEleitores'],$_POST['votosBrancos'],$_POST['votosNulos'],$_POST['votosValidos'])){
        $numEleitores = $_POST['numEleitores'];
        $votosBrancos = $_POST['votosBrancos'];
        $votosNulos = $_POST['votosNulos'];
        $votosValidos = $_POST['votosValidos'];

        if(isset($votosBrancos,$votosNulos,$votosValidos)){
        $votosBrancos = ($votosBrancos / $numEleitores) * 100;
        $votosNulos = ($votosNulos / $numEleitores) * 100;
        $votosValidos = ($votosValidos / $numEleitores) * 100;
        }

        printf("Votos brancos = %.2f%%. Votos nulos = %.2f%%. Votos Válidos = %.2f%%",$votosBrancos, $votosNulos, $votosValidos);
    }
    ?>
    <hr>
    <h3>13. Escreva um programa para ler o salário mensal atual de um funcionário e<br>
    aplicar um percentual de reajuste, calcular e escrever o valor do novo salário.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#13" id="13" method="POST">
        <p>Digite seu salário:</p>
        <input type="number" name="salarioMensal" id="salarioMensalId">
        <p>Percentual reajuste:</p>
        <input type="number" name="percentualReajuste" id="percentualReajusteId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['salarioMensal'],$_POST['percentualReajuste'])){
        $salarioMensal = $_POST['salarioMensal'];
        $percentualReajuste = $_POST['percentualReajuste'];

        $novoSalario = $salarioMensal - $salarioMensal * ($percentualReajuste / 100);

        echo "Novo salario = $novoSalario";
    }
    ?>
    <hr>
    <h3>14. O custo de um carro novo ao consumidor é a soma do custo de fábrica com<br>
    a porcentagem do distribuidor e dos impostos (aplicados ao custo de fábrica).<br>
    Supondo que o percentual do distribuidor seja de 28% e os impostos de 45%,<br>
    escrever um programa para ler o custo de fábrica de um carro, calcular e<br>
    escrever o custo final ao consumidor.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#14" id="14" method="POST">
        <p>Digite o custo de fábrica:</p>
        <input type="number" name="custoFabrica" id="custoFabricaId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['custoFabrica'])){
        $custoFabrica = $_POST['custoFabrica'];
        $porcentagemDistribuidor = $custoFabrica * 0.28;
        $imposto = $custoFabrica * 0.45;

        printf("Valor final = %u",$custoFabrica + $porcentagemDistribuidor + $imposto);
    }
    ?>
    <hr>
    <h3>15. Uma revendedora de carros usados paga a seus funcionários vendedores<br>
    um salário fixo por mês, mais uma comissão também fixa para cada carro<br>
    vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um<br>
    programa que leia o número de carros por ele vendidos, o valor total de suas<br>
    vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e<br>
    escreva o salário final do vendedor.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#15" id="15" method="POST">
        <p>Número de carros vendidos:</p>
        <input type="number" name="numCarroVendido" id="numCarroVendidoId">
        <p>Salário:</p>
        <input type="number" name="salarioCarros" id="salarioCarrosId">
        <p>Valor por carro vendido:</p>
        <input type="number" name="valorCarroVendido" id="valorCarroVendidoId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['numCarroVendido'],$_POST['salarioCarros'],$_POST['valorCarroVendido'])){
        $numCarroVendido = $_POST['numCarroVendido'];
        $salarioCarros = $_POST['salarioCarros'];
        $valorCarroVendido = $_POST['valorCarroVendido'];

        $valorCarroVendido = ($valorCarroVendido * 0.05) + $salarioCarros;
        $salarioTotal = $salarioCarros + $valorCarroVendido;

        echo "Salario total = $salarioTotal";
    }
    ?>
    <hr>
    <h3>16. A Loja Mamão com Açúcar está vendendo seus produtos em 5 (cinco)<br>
    prestações sem juros. Faça um programa que receba um valor de uma compra<br>
    e mostre o valor das prestações.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#16" id="16" method="POST">
        <input type="number" name="valorVendaProduto" id="valorVendaProdutoId">
        <button type="submit">Resultado</button>
    </form>
    <?php
    if(isset($_POST['valorVendaProduto'])){
        $valorVendaProduto = $_POST['valorVendaProduto'];
        printf("Valor das prestações = %.2f",$valorVendaProduto / 5);
    }
    ?>
    <hr>
    <h3>17. Faça um algoritmo que receba o preço de custo de um produto e mostre o<br>
    valor de venda. Sabe-se que o preço de custo receberá um acréscimo de<br>
    acordo com um percentual informado pelo usuário.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#17" id="17" method="POST">
        <p>Valor de custo do produto:</p>
        <input type="number" name="valorCustoProduto" id="valorCustoProdutoId">
        <button type="submit">Resultado</button>
    </form>
    <?php
        if(isset($_POST['valorCustoProduto'])){
            $valorProduto = $_POST['valorCustoProduto'];
            $valorVenda = $valorProduto + ($valorProduto / 100 * $valorProduto);
            echo "Valor venda = $valorVenda";
        }
    ?>
    <hr>
    <h3>18. A padaria Hotpão vende uma certa quantidade de pães franceses e uma<br>
    quantidade de broas a cada dia. Cada pãozinho custa R$ 0,50 e a broa custa<br>
    R$ 4,50. Ao final do dia, o dono quer saber quanto arrecadou com a venda dos<br>
    pães e broas (juntos), e quanto deve guardar numa conta de poupança (10%<br>
    do total arrecadado). Você foi contratado para fazer os cálculos para o dono.<br>
    Com base nestes fatos, faça um programa para ler as quantidades de pães e<br>
    de broas, e depois calcular os dados solicitados.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#18" id="18" method="POST">
        <p>Total de vendas de pães:</p>
        <input type="number" name="vendasPaes" id="vendasPaesid">
        <p>Total de vendas de broas:</p>
        <input type="number" name="vendasBroas" id="vendasBroasId">
        <button type="submit">Resultado</button>
    </form>
    <?php
        if(isset($_POST['vendasPaes'],$_POST['vendasBroas'])){
            $vendasPaes = $_POST['vendasPaes'];
            $vendasBroas = $_POST['vendasBroas'];

            $poupanca = ($vendasPaes + $vendasBroas) * 0.10;
            printf("Total de vendas = %.2f. Poupança = %.2f",$vendasPaes + $vendasBroas, $poupanca);
        }
    ?>
    <hr>
    <h3>19. Um motorista deseja colocar no seu tanque X reais de gasolina. Escreva<br>
    um programa para ler o preço do litro da gasolina e o valor do pagamento, e<br>
    exibir quantos litros ele conseguiu colocar no tanque.</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#19" id="19" method="POST">
        <p>Preço do litro de gasolina:</p>
        <input type="number" name="litroGasolina" id="litroGasolinaId">
        <p>Valor pagamento:</p>
        <input type="number" name="pagamentoGasolina" id="pagamentoGasolina">
        <button type="submit">Resultado</button>
    </form>
    <?php
        if(isset($_POST['litroGasolina'],$_POST['pagamentoGasolina'])){
            $valorGasolina = $_POST['litroGasolina'];
            $valorPagamento = $_POST['pagamentoGasolina'];

            printf("Litros = %.2f",$valorPagamento / $valorGasolina);
        }
    ?>
    <hr>
    <h3>20. Programa par perfeito. Faça um programa em que o usuário precise digitar<br>
    um número de 1 até 10. Agora o outro usuário digita o segundo número. Se o<br>
    número do primeiro usuário for igual ao do segundo escreva “Esse é seu par<br>
    perfeito” Se os números forem diferentes escreva “Afaste-se do seu inimigo”</h3>
    <form action="<?=$_SERVER['PHP_SELF'];?>#20" method="POST" id="20">
        <p>Digite um número de 1 a 10:</p>
        <input type="number" max="10" name="numeroDez" id="numeroDezId">
        <p>Digite outro numero de 1 a 10:</p>
        <input type="number" max="10" name="outroNumeroDez" id="outroNumeroDezId">
        <button type="submit">Resultado</button>
    </form>
    <?php
        if(isset($_POST['numeroDez'],$_POST['outroNumeroDez'])){
            $numeroDez = $_POST['numeroDez'];
            $outroNumeroDez = $_POST['outroNumeroDez'];

            if($numeroDez == $outroNumeroDez)
                echo "Esse é seu par perfeito";
            else
                echo "Afaste-se do seu inimigo";
        }
    ?>
</body>
</html>