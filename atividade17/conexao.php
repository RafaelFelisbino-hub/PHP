<?php
try {
    $conn = new PDO("mysql:hostname=localhost;dbname=atv17_crud_db","root","");
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>