<?php
try {
    $conn = new PDO("mysql:hostname=localhost;dbname=atividade16_crud_db","root","");

    if(isset($_POST['usuarioPessoa'])){
        $usuario = $_POST['usuarioPessoa'];

        $select = $conn->prepare("SELECT 
        id_pessoa AS id, usuario_pessoa AS Usuario, nome_pessoa AS Nome, telefone_pessoa AS Telefone, email_pessoa AS Email
        FROM pessoa WHERE usuario_pessoa = :usuario");
        $select->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $select->execute();
        
        $resultado = $select->fetch(PDO::FETCH_ASSOC);
        foreach($resultado as $key => $value)
            echo "$key = $value<br>";
       
        echo '<a href="../select.php">Voltar</a>';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
 
?>