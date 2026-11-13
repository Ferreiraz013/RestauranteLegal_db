<?php
require __DIR__ . "/config/Database.php";
require __DIR__ ."/models/Prato.php";
use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;

$meuBancoDeDados = new Database(); // Cria um objetivo da classe Database
$minhaConexao = $meuBancoDeDados->conectar(); // Chama o método conectar() para estabelecer a conexão com o banco de dados

if (is_string($minhaConexao)) {
    echo $minhaConexao; // Exibe a mensagem de erro retornada pelo método conectar()
    
} else {
    echo "Conexão com o banco de dados estabelecida com sucesso! <br> <br>";
}

$meuPrato = new Prato(1, "Feijoada", "Prato tradicional brasileiro", 45.99); // Cria um objeto da classe Prato com os valores fornecidos

//var_dump($meuPrato) ;

echo $meuPrato->getPratoHTML(); // Chama o método getPratoHTML() para exibir as informações do prato em formato HTML

//$minhaBebida = new Bebida() ;
//echo minhaBebida->getBebidaHTML() ;
?>