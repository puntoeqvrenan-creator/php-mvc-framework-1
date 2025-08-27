<?php
//Importar o controller
require_once('./controllers/clientesController.php');

//Instância e execução do método construct
$controller = new ClientesController();

//Execução da sequência de métodos que fará o INSERT
$controller->Inserir();

//Execução da sequência de métodos que fará o SELECT
$controller->Listar();

//Execução da sequência de métodos que fará o UPDATE
$controller->Atualizar();

//Execução da sequência de métodos que fará o DELETE
$controller->Deletar();
?>