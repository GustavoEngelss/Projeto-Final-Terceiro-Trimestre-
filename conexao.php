<?php 

$usuario = 'root';
$senha = 'Gug@9290';
$database = 'auto_center';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco: " .$mysqli->error);
}
?>