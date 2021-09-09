<?php
try {
    $conn = new PDO("mysql:hostname=localhost;dbname=atividade16_crud_db","root","");

    if(isset($_POST['usuarioPessoa'])){
        $usuario = $_POST['usuarioPessoa'];

        $delete = $conn->prepare("DELETE FROM pessoa WHERE usuario_pessoa = :usuario");
        $delete->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $delete->execute();
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$conn = null;
?>