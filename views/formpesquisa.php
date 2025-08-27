<div id="titulo" class="mb-4 text-center">
            <h1 class="display-5">Pesquisa de Clientes</h1>
        </div>
        <form method="post" action="index.php" id="contato" autocomplete="off">
            <fieldset class="border p-4 rounded shadow-sm">
                <legend class="w-auto px-2">Nome do Cliente</legend>

                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome" >
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" name="btnPesquisar" class="btn btn-primary">Pesquisar</button>
                    <button type="reset" name="btnLimpar" class="btn btn-secondary">Limpar</button>
                </div>
            </fieldset>
        </form>