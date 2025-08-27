
<?php
//Importar o arquivo com os métodos de comandos do Banco de Dados
require_once('./model/clientesModel.php');
class ClientesController
{
    //Atributos
    protected $model;
    //Métodos / Funções / Procedimentos
    function __construct()
    {
        //Instância da model e execução de sua construct.
        $this->model = new ClientesModel(); //SELECT
    }
    //Função que irá executar o SELECT 
    function Listar()
    {
        require_once('./views/formPesquisa.php');
        $nome="";
        if (isset($_POST['btnPesquisar'])) {
            $nome = $_POST['txtNome'];
            //Objeto que receberá o resultado do SELECT     
        }
        $resultData = $this->model->Listar($nome);
        //Importar o arquivo com estrutura de tabela
        require_once('./views/listar.php');
    }

    //Chamada da função de inserção
    function Inserir()
    {
        //Importar o formulário para cadastro
        require_once('./views/formCadastro.php');

        if (isset($_POST['btnEnviar'])) {
            //Verificar se não há campos vazios para cadastro
            if(empty($_POST['txtNome']) || empty($_POST['txtFone']))
            {
                echo "<h3 id='erro'> Campos Nome e Telefone obrigatórios!</h3>";
            }
            else
            {
                $this->model->nome = $_POST['txtNome'];
                $this->model->fone = $_POST['txtFone'];
                $resultado = $this->model->Inserir();
    
                //Atualizar/Redirecionar para a página index.php
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
            }

        }
    }

    //Chamada da função de atualização
    function Atualizar()
    {
        //Importar o formulário para cadastro
        require_once('./views/formCadastro.php');

        if (isset($_POST['btnAtualizar'])) {
            $this->model->codigo = $_POST['txtCodigo'];
            $this->model->nome = $_POST['txtNome'];
            $this->model->fone = $_POST['txtFone'];
            $resultado = $this->model->Atualizar();

            //Atualizar/Redirecionar para a página index.php               
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        }
    }

    function Deletar()
    {
        //Importar o formulário para cadastro
        require_once('./views/formCadastro.php');

        if (isset($_POST['btnDeletar'])) {
            $this->model->codigo = $_POST['txtCodigo'];
            $resultado = $this->model->Deletar();

            //Atualizar/Redirecionar para a página index.php               
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
        }
    }
}
?>
