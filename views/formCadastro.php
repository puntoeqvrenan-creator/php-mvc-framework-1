<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet"  href="views/css/estilo.css">
</head>

<body>
    <div class="container mt-5">
        <div id="titulo" class="mb-4 text-center">
            <h1 class="display-5">Cadastro de Clientes</h1>
        </div>
        <form method="post" action="index.php" id="contato" autocomplete="off">
            <fieldset class="border p-4 rounded shadow-sm">
                <legend class="w-auto px-2">Formulário</legend>

                <div class="mb-3">
                    <label for="txtCodigo" class="form-label">Código:</label>
                    <input type="text" class="form-control" id="txtCodigo" name="txtCodigo">
                </div>

                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome">
                </div>

                <div class="mb-3">
                    <label for="txtFone" class="form-label">Fone:</label>
                    <input type="text" class="form-control" id="txtFone" name="txtFone" >
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                    <button type="reset" name="btnLimpar" class="btn btn-secondary">Limpar</button>
                    <button type="submit" name="btnAtualizar" class="btn btn-info">Atualizar</button>
                    <button type="submit" name="btnDeletar" class="btn btn-danger">Deletar</button>
                </div>
            </fieldset>
        </form>
    