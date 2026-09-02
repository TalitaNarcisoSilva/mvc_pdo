<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Projetos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <main class="container py-5">
        <h1 class="mb-4"> Cadastro de Projetos</h1>

        <!-- FORMULARIO-->
        <div class="card mb-4">
            <div class="card-body">
                <h4 id="tituloFormulario"> Novo Projeto </h4>

                <form id="formProjeto">

                    <!------------------CAMPOS OCULTOS---------------------------->
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="acao" name="acao" value="cadastrar">
                    <!------------------------------------------------------------->
                    <div class="mb-3">
                        <label for="nome" class="form-label"> Nome do Projeto</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="duracao" class="form-label"> Duração em Meses </label>
                        <input type="number" id="duracao" name="duracao" class="form-control" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="responsavel" class="form-label"> Responsável </label>
                        <input type="text" id="responsavel" name="responsavel" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary"> Salvar </button>
                    <button type="button" class="btn btn-secondary" onclick="novoProjeto()"> Novo </button>

                </form>

            </div>

        </div>

        <!-- TABELA -->
        <div class="card mb-4">
            <div class="card-body">
                <h4> Projetos Cadastrados </h4>
                <div class ="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Projeto </th>
                                <th> Duração </th>
                                <th> Responsável </th>
                                <th> Ações </th>
                            </tr>

                        </thead>
                        <tbody id="tabelaProjetos">
                            


                        </tbody>


                    </table>

                </div>
            </div>

        </div>
    </main>
    <script src="projeto.js"></script>
</body>

</html>