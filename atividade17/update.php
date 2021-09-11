<?php
require_once 'conexao.php';

try {
    $nome;
    $rua;
    $numero;
    $complemento;
    $bairro;
    $cep;
    $email;
    $telefoneFixo;
    $celular;
    $telefoneSecundario;
    $id_medico = $_GET['id_medico'];
    $select = $conn->query("SELECT * FROM medicos WHERE id_medico = '$id_medico';");
    $row = $select->fetch(PDO::FETCH_ASSOC);
        if(empty($_POST['nome']))
            $nome = $row['nome_medico'];
        else
            $nome = $_POST['nome'];

        if(empty($_POST['rua']))
            $rua = $row['rua_medico'];
        else
            $rua = $_POST['rua'];
        
        if(empty($_POST['numero']))
            $numero = $row['numero_medico'];
        else
            $numero = $_POST['numero'];

        if(empty($_POST['complemento']))
            $complemento = $row['complemento_medico'];
        else
            $complemento = $_POST['complemento'];
        
        if(empty($_POST['bairro']))
            $bairro = $row['bairro_medico'];
        else
            $bairro = $_POST['bairro'];

        if(empty($_POST['cep']))
            $cep = $row['cep_medico'];
        else
            $cep = $_POST['cep'];

        if(empty($_POST['email']))
            $email = $row['email_medico'];
        else
            $email = $_POST['email'];

        if(empty($_POST['telefoneFixo']))
            $telefoneFixo = $row['telefone_fixo_medico'];
        else
            $telefoneFixo = $_POST['telefoneFixo'];
        
        if(empty($_POST['celular']))
            $celular = $row['telefone_celular_medico'];
        else
            $celular = $_POST['celular'];

        if(empty($_POST['telefoneSecundario']))
            $telefoneSecundario = $row['telefone_secundario_medico'];
        else
            $telefoneSecundario = $_POST['telefoneSecundario'];

    $update = $conn->prepare("UPDATE medicos SET nome_medico = :nome, rua_medico = :rua, numero_medico =:numero,
    complemento_medico = :complemento, bairro_medico = :bairro, cep_medico = :cep, email_medico = :email,
    telefone_fixo_medico = :telefoneFixo, telefone_celular_medico = :celular, telefone_secundario_medico = :telefoneSecundario;");

    $update->bindParam(':nome', $nome);
    $update->bindParam(':rua', $rua);
    $update->bindParam(':numero', $numero);
    $update->bindParam(':complemento', $complemento);
    $update->bindParam(':bairro', $bairro);
    $update->bindParam(':cep', $cep);
    $update->bindParam(':email', $email);
    $update->bindParam(':telefoneFixo', $telefoneFixo);
    $update->bindParam(':celular', $celular);
    $update->bindParam(':telefoneSecundario', $telefoneSecundario);

    $update->execute();
    
    header("location: consultar.php");

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>