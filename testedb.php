<?php
//Carregamento dos arquivos físicos;
//O "require_once" garante que os arquivos de configuração e models sejam incluídos.
//O uso do "__DIR__" cerve para pegar o caminho absoluto da pasta atual do projeto.
require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/models/Prato.php";
require_once __DIR__ . "/models/Bebida.php";
require_once __DIR__ . "/models/Sobremesa.php";

//Importação dos Namespaces;
// O "use" diz ao PHP quais "namespaces" (caminhos lógicos) nós vamos utilizar neste arquivo.
use RestauranteLegal\Config\Database;
use RestauranteLegal\Models\Prato;
use RestauranteLegal\Models\Bebida;
use RestauranteLegal\Models\Sobremesa;


//Teste de conexão com o banco de dados;
//Cria um objeto (instância) da classe "Database" configurada para o banco.
$meuBancoDeDados = new Database(); 

//Chama o método "conectar()" para estabelecer a conexão via PDO.
$minhaConexao = $meuBancoDeDados->conectar(); 

//Verifica se o que retornou foi uma string (o que indica uma mensagem de erro).
if (is_string($minhaConexao)) {
    echo $minhaConexao; //Exibe o erro retornado pelo método "conectar()"
} else {
    echo "Conexão com o banco de dados estabelecida com sucesso! <br><br>";
}

//Criação e teste da classe Prato;
// Instancia um novo objeto "Prato" passando os dados de exemplo no construtor.
$meuPrato = new Prato(1, "Feijoada", "Prato tradicional brasileiro", 45.99); 

//Chama o método que formata os dados do prato em HTML e exibe na tela.
echo $meuPrato->getPratoHTML(); 

//Adiciona uma quebra de linha para separar visualmente do próximo item.
echo "<br><br>";


//Criação e teste da classe Bebida;
//Instancia um novo objeto "Bebida" passando ID, nome, volume, indicador alcoólico e preço.
$minhaBebida = new Bebida(1, "Coca-Cola Lata", "350 ml", 0, 6.50);

//Chama o método que formata os dados da bebida em HTML e exibe na tela.
echo $minhaBebida->getBebidaHTML();

echo "<br><br>";

//Criação e teste da classe Sobremesa;
//Instancia um novo objeto "Sobremesa" passando ID, nome, descrição e preço.
$minhaSobremesa = new Sobremesa(1, "Pudim de Leite Condensado", "Tradicional pudim cremoso com calda de caramelo artesanal", 14.90);

//Chama o método que formata os dados da sobremesa em HTML e exibe na tela.
echo $minhaSobremesa->getSobremesaHTML();

echo "<br><br>";

echo "(❁´◡`❁)...(●'◡'●)...(*≧ω≦)...(◕‿◕✿)...(｡♥‿♥｡)...(✿◠‿◠)...(｡♥‿♥｡)...(◕‿◕✿)...(*≧ω≦)...(●'◡'●)...(❁´◡`❁)...☆*: .｡. o(≧▽≦)o .｡.:*☆...(^///^)";
?>