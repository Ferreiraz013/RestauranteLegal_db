<?php
namespace RestauranteLegal\Config;
use PDO;
class Database{
    private string $host = "localhost";
    private string $database = "restaurantelegal_db";
    private string $user = "root";
    private string $pwd = 'usbw';
    private string $port = "3306";
    private PDO|null $conexao;

    public function conectar(){
        $this->conexao = null;

        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->database . ';charset=utf8';

        try{
            $this->conexao = new PDO($dsn, $this->user, $this->pwd);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexão bem-sucedida!";
        } catch(\PDOException $e){
            return json_encode(["Erro na conexão: "=>"Não foi possível estabelecer a conexão com o banco de dados. " . $e->getMessage()]);
        } catch(\Throwable $th){
            return json_encode(["Erro na conexão: "=>"Ocorreu um erro inesperado. " . $th->getMessage()]);
        }
        return $this->conexao;
    }
}
?>