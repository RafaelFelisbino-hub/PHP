<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
    <style> 
        .mb{
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <h1>Teste</h1>
    <?php echo "<h3 class='mb'>Classes e objetos</h3>";
    
        class fruta {
            public $nome;
            public $cor;

            function inserir_nome($nome){
                $this->nome = $nome;
            }

            function nome(){
                return $this-> nome;
            }

            function inserir_cor($cor){
                $this->cor = $cor;
            }

            function cor(){
                return $this->cor;
            }
        }
        // Sem método
        $banana = new Fruta();
        $banana->nome = 'Banana Prata';
        $banana->cor = 'Amarela';

        // Com método
        $uva = new Fruta();
        $uva->inserir_nome('Uva passa');
        $uva->inserir_cor('Roxa');

        echo 'Nome: ',$banana->nome,'<br>','Cor: ', $banana->cor;
        echo '<br><br>';
        echo "Nome: " . $uva->nome();
        echo '<br>';
        echo 'Cor: '.$uva->cor();

    ?>
</body>
</html>