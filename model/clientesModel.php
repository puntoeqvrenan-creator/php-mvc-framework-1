<?php
//Importar o arquivo com os dados de conexão do Banco de Dados
require('./dao/conexao.php');
//ClientesModel será uma subclasse de Connect
class ClientesModel extends Connect
{
    //Atributos
    public $codigo, $nome, $fone;

    function __construct()
    {
        //Execução do construct da classe pai - Connect
        parent::__construct();//Faz efetivamente a conexão
    }
    //Função para listar os registros do Banco de Dados
    function Listar($nome)
    {
        $query = "";
        if(empty($nome)){
            $query = "SELECT * FROM tb_clientes";
        }
        else{
            $query = "SELECT * FROM tb_clientes
            WHERE ClNome LIKE '$nome%'";    
        }
        //Preparação do comando SELECT
        $sqlSelect = $this->connection->query($query);
        //Execução e associação dos registros
        $resultQuery = $sqlSelect->fetchAll();
        //Retorno para a chamada do método
        return $resultQuery;
    }

    //Função para inserir os registros do Banco de Dados
    function Inserir()
    {
        //String de Inserção no Banco de dados
        $query = "INSERT INTO tb_clientes (ClNome, ClFone) 
        VALUES (:nome, :fone)";
        //Atribui o Insert ao PDO
        $insert = $this->connection->prepare($query);
        //Define os parâmetros que serão substituídos
        $insert->bindParam(':nome', $this->nome);
        $insert->bindParam(':fone', $this->fone);
        //Executa a inserção de registros no Banco de Dados
        $insert->execute();
    }

    //Função para atualizar os registros do Banco de Dados
    function Atualizar()
    {
        //String de Inserção no Banco de dados
        $query = "UPDATE tb_clientes SET ClNome = :nome, 
        ClFone = :fone WHERE ClCodigo = :codigo";
        //Atribui o Insert ao PDO
        $update = $this->connection->prepare($query);
        //Define os parâmetros que serão substituídos
        $update->bindParam(':codigo', $this->codigo);
        $update->bindParam(':nome', $this->nome);
        $update->bindParam(':fone', $this->fone);
        //Executa a inserção de registros no Banco de Dados
        $update->execute();
    }

    //Função para atualizar os registros do Banco de Dados
    function Deletar()
    {
        //String de Inserção no Banco de dados
        $query = "DELETE FROM tb_clientes WHERE ClCodigo = :codigo";
        //Atribui o Insert ao PDO
        $delete = $this->connection->prepare($query);
        //Define os parâmetros que serão substituídos
        $delete->bindParam(':codigo', $this->codigo);
        //Executa a inserção de registros no Banco de Dados
        $delete->execute();
    }
}
