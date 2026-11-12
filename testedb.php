<?php
require __DIR__ ."config/Database.php";
user RestauranteLegal\Config\Database;

$meuBancoDeDados = new Database();
$meuBancoDeDados->conectar();
?>