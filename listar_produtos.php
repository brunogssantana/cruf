<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/864a97e503.js" crossorigin="anonymous"></script>
        <style type="text/css">

            #tamanhoContainer{
                width: 500px;
            }

        </style>

    </head>
    <body>
    
    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Produtos</h3>
        <br/>
        <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    
            <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">SKU</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="#" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
                    <a class="btn btn-primary btn-sm" href="#" role="button"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Visualizar</a>
                    <a class="btn btn-outline-danger btn-sm" href="#" role="button"><i class="fa-regular fa-trash-can"></i>&nbsp;Excluir</a>
                </td>
              </tr>
    
              </tr>
            </tbody>
          </table>

    </div>
    
    
    </body>
</html>