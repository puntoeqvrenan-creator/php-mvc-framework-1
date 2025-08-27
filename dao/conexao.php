<?php
//Definição das constantes
define('HOST', 'localhost');
define('DATABASE', 'bdphp-mvc-ti98');
define('USER', 'root');
define('PASSWORD', '');

class Connect
{
    //ATALHO PARA FORMATAR SHIFT + ALT + F
    //Definição dos atributos
    protected $connection;
    //Método construtor - executado automaticamente na instância da classe
    function __construct()
    {
        $this->connectDataBase();
    }
    //Função que fará a conexão com o Bando de Dados
    function connectDataBase()
    {
        try {
            $this->connection = new PDO('mysql:host=' . HOST .
                ';dbname=' . DATABASE, USER, PASSWORD);
                //echo "Conexão realizada.";
        } catch (PDOException $e) {
            echo "ERRO - Conexão não realizada: " . $e->getMessage();
            die();
        }
    }
}
//INSTÂNCIA -> Teste de acesso ao Banco de dados
//$teste = new Connect();
