<?php
$host = "localhost";
$usuario = "root";
$senha= "";
$db = "todolist";
$id = '';

$con = new mysqli($host, $usuario, $senha, $db);

if(mysqli_connect_errno()) {
    trigger_error((mysql_connect_error()));
    exit();
}

mysqli_set_charset($con, 'utf8');
var_dump($con);

?>