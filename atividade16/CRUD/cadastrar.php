<?php
    try {
        $conn =  new PDO("mysql:hostname=localhost;dbname=atividade16_crud_db","root","");

        if(isset($_POST['usuarioPessoa'],$_POST['nomePessoa'],$_POST['telefonePessoa'],$_POST['emailPessoa'])){
            $usuario = $_POST['usuarioPessoa'];
            $nome = $_POST['nomePessoa'];
            $telefone = $_POST['telefonePessoa'];
            $email = $_POST['emailPessoa'];

            $insert = $conn->prepare("INSERT INTO pessoa VALUES ('DEFAULT', :usuario, :nome, :telefone, :email)");

            $insert->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $insert->bindParam(':nome', $nome, PDO::PARAM_STR);
            $insert->bindParam(':telefone', $telefone, PDO::PARAM_STR);
            $insert->bindParam(':email', $email, PDO::PARAM_STR);

            $insert->execute();
        }
    } catch (PDOException $e) {
        echo "Error " . $e->getMessage();
    }

    $conn = null;
?>