<?php
try {
    $conn =  new PDO("mysql:hostname=localhost;dbname=atividade16_crud_db","root","");
    
    $usuario = $_POST['usuarioPessoa'];
    $nome = $_POST['nomePessoa'];
    $telefone = $_POST['telefonePessoa'];
    $email = $_POST['emailPessoa'];

    $update = $conn->prepare("UPDATE pessoa SET usuario_pessoa = :usuario, nome_pessoa = :nome,
    telefone_pessoa = :telefone, email_pessoa = :email WHERE usuario_pessoa = :usuario");
    
    $update->bindParam(':usuario', $usuario , PDO::PARAM_STR);
    $update->bindParam(':nome', $nome , PDO::PARAM_STR);
    $update->bindParam(':telefone', $telefone , PDO::PARAM_STR);
    $update->bindParam(':email', $email , PDO::PARAM_STR);

    $update->execute();


} catch (PDOException $e) {
    echo 'Error ' . $e->getMessage();
}

$conn = null;
?>