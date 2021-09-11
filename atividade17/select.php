<?php
require_once 'conexao.php';
    try {
      $select = $conn->query("SELECT * FROM medicos;");
      while ($row = $select->fetch(PDO::FETCH_ASSOC)){
        echo '<div style="text-align: center;">';
        echo 'Nome: '.$row['nome_medico'].'<br>';
        echo 'Rua: '.$row['rua_medico'].'<br>';
        echo 'Número: '.$row['numero_medico'].'<br>';
        echo 'Complemento: '.$row['complemento_medico'].'<br>';
        echo 'Bairro: '.$row['bairro_medico'].'<br>';
        echo 'Cep: '.$row['cep_medico'].'<br>';
        echo 'E-mail: '.$row['email_medico'].'<br>';
        echo 'Telefone: '.$row['telefone_fixo_medico'].'<br>';
        echo 'Celular: '.$row['telefone_celular_medico'].'<br>';
        echo 'Telefone secundário: '.$row['telefone_secundario_medico'].'<br><br>';
        echo '</div>';
        }
        echo '<a href="index.php">Voltar</a>';
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>