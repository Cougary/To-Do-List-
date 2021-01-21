<?php
    $conn = new mysqli("localhost", "root", "","todolist");
    if($conn->connect_error) {
        die("Erro na conexão".$conn->connect_error);
    }

    echo("Sucesso");
?>