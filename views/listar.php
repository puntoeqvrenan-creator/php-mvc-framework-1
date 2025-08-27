
        <h1 class="mb-4 text-center">Lista de Clientes</h1>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Fone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultData as $registro) { ?>
                    <tr>
                        <td><?= htmlspecialchars($registro['ClCodigo']) ?></td>
                        <td><?= htmlspecialchars($registro['ClNome']) ?></td>
                        <td><?= htmlspecialchars($registro['ClFone']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (opcional, para interações JS do Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
