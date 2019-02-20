<?php

/**
 *Classe responsável por fazer a conectar, realizar consultas, inserções, atualizações e deletes
 *no banco de dados. Tendo os devidos cuidados para evitar SQL Inject.
 */
class Sql extends PDO
{

    /**
     * @var Object atributo responsável por receber a instância da conexão com o banco
     */
    private $conn;

    /**
     * Realizar a conexão com o Banco
     */
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");
    }

    /**
     * Método responsável por ligar as referências dos valores (bindValue) que serão utilizados em uma instrução SQL(Select, Insert, Update, Delete).
     * @param Object $statement Objeto contendo a instrução SQL
     * @param [type] $key       Referência para o valor passado
     * @param [type] $chave     Valor que será utilizado na consulta
     */
    private function setParam($statement, $key, $chave){
        $statement->bindParam($key, $chave);
    }

    /**
     * Método responsável por PREPARAR uma instrução SQL para ser executada no Banco
     * @param String $rawQuery Comando SQL que deverá ser executado
     * @param array  $params   array que irá receber os dados que serão utilizados no comando SQL
     */
    public funtion query($rawQuery, $params = [])
    {
        $stmt = $this->conn->prepare($rawQuery); //Preparando o comando SQL
        //Associar os parametros ao comando
        foreach ($params as $key => $value) {
          # code...
        }
    }


}

?>
