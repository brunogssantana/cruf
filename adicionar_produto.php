<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">

            #tamanhoContainer{
                width: 500px;
            }

        </style>

    </head>
    <body>
        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
            <h4>Formulário de Cadastro</h4>
            <form style="margin-top: 20px;">
                <div class="mb-3">
                <label>SKU</label>
                <input type="text" class="form-control" placeholder="Insira o nome">
                </div>

                <div class="mb-3">
                <label>Nome do Prouto</label>
                <input type="text" class="form-control" placeholder="Insira o Prouto">
                </div>

                <div class="mb-3">
                <label>Categoria</label>
                <select class="form-select">
                    <option selected>Selecione a Categoria</option>
                    <option value="perifericos">Periféricos</option>
                    <option value="placas">Placas</option>
                    <option value="baterias">Baterias</option>
                  </select>
                </div>

                <div class="mb-3">
                <label>Quantidade</label>
                <input type="number" class="form-control" placeholder="Insira a Quantidade">
                </div>

                <div class="mb-3">
                <label>Fornecedor</label>
                <select class="form-select">
                    <option selected>Selecione o Fornecedor</option>
                    <option value="Fornecedor A">Fornecedor A</option>
                    <option value="Fornecedor B">Fornecedor B</option>
                    <option value="Fornecedor C">Fornecedor C</option>
                  </select>
                </div>
                
                <div style="text-align: right;">
                <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
                <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>  
    </body>
</html>