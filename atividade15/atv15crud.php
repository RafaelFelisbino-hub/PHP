<?php
try {
    $con =  new PDO("mysql:hostname=localhost;dbname=atividade15_crud_db", "root", "");

    if(isset($_POST['nomePaciente'],$_POST['bairroPaciente'],$_POST['cidadePaciente'],$_POST['ruaPaciente'],$_POST['dataNascPaciente'])){
        $nomePaciente = $_POST['nomePaciente'];
        $bairroPaciente = $_POST['bairroPaciente'];
        $cidadePaciente = $_POST['cidadePaciente'];
        $ruaPaciente = $_POST['ruaPaciente'];
        $dataNascPaciente = $_POST['dataNascPaciente'];

        $con->query("INSERT INTO pacientes VALUES 
        ('DEFAULT','$nomePaciente', '$bairroPaciente', '$cidadePaciente', ' $ruaPaciente', ' $dataNascPaciente');");
    }

    echo '<a href="index.php">Voltar</a>';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

$con = null;
?>